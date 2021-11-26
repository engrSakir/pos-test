<?php

namespace App\Http\Livewire\Backend;

use App\Models\Expense;
use App\Models\Invoice;
use DateInterval;
use DatePeriod;
use DateTime;
use Livewire\Component;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class Report extends Component
{
    public $tab = 'daily';
    public $daily_result = false;
    public $daily_starting_date = false;
    public $daily_ending_date = false;

    public $monthly_result = false;
    public $monthly_starting_date = false;
    public $monthly_ending_date = false;

    public $yearly_result = false;
    public $yearly_starting_date = false;
    public $yearly_ending_date = false;

    public $total_income = 0;
    public $total_expense = 0;

    public $data_set = [];

    public function tab_daily(){
        $this->tab = 'daily';
    }
    
    public function tab_monthly(){
        $this->tab = 'monthly';
    }
   
    public function tab_yearly(){
        $this->tab = 'yearly';
    }

    public function daily_report()
    {
        $this->validate([
            'daily_starting_date' => 'required|date',
            'daily_ending_date' => 'required|date',
        ]);
        $this->data_set = [];
        $begin = new DateTime($this->daily_starting_date);
        $end = new DateTime($this->daily_ending_date);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end->modify('+1 day'));

        foreach ($period as $date) {
            // echo $date->format("l Y-m-d \n").'</br>';
            $invoices = Invoice::whereDate('created_at',  $date->format("Y-m-d"))->get();
            $total_income_of_this_day = 0;
            if($invoices->count() > 0){
                foreach($invoices as $invoice){
                    $total_income_of_this_day += $invoice->total_price_after_discount();
                }
            }
            array_push($this->data_set,[
                'date' => $date->format("d/m/Y l"),
                'income' => $total_income_of_this_day,
                'expense' => Expense::whereDate('created_at',  $date->format("Y-m-d"))->sum('amount'),
            ]);
        }
        $this->daily_result = true;
        $this->monthly_result = false;
        $this->yearly_result = false;
    }

    public function monthly_report()
    {
        $this->validate([
            'monthly_starting_date' => 'required|date',
            'monthly_ending_date' => 'required|date',
        ]);
        $this->data_set = [];
        $begin = new DateTime($this->monthly_starting_date);
        $end = new DateTime($this->monthly_ending_date);

        $interval = DateInterval::createFromDateString('1 month');
        $period = new DatePeriod($begin, $interval, $end->modify('+1 month'));

        foreach ($period as $date) {
            // echo $date->format("Y-m \n").'</br>';
            $invoices = Invoice::whereMonth('created_at',  $date->format("m"))->whereYear('created_at',  $date->format("Y"))->get();
            $total_income_of_this_day = 0;
            if($invoices->count() > 0){
                foreach($invoices as $invoice){
                    $total_income_of_this_day += $invoice->total_price_after_discount();
                }
            }
            array_push($this->data_set,[
                'date' => $date->format("F Y"),
                'income' => $total_income_of_this_day,
                'expense' => Expense::whereMonth('created_at',  $date->format("m"))->whereYear('created_at',  $date->format("Y"))->sum('amount'),
            ]);
        }
        $this->daily_result = false;
        $this->monthly_result = true;
        $this->yearly_result = false;
    }

    public function yearly_report()
    {
        dd('Yearly');
        $this->daily_result = false;
        $this->monthly_result = false;
        $this->yearly_result = true;
    }

    public function report_download()
    {
        return response()->streamDownload(function () {
            PDF::loadView('pdf.report', ['data_set' => $this->data_set])->download();
        }, 'Report generated at '.date('d-m-Y- h-i-s').'.pdf'); 
        
        // return response()->streamDownload(function () {
        //     PDF::loadView('pdf.report')->download();
        // }, 'Report generated at '.date('d-m-Y- h-i-s').'.pdf'); 
    }

    public function render()
    {
        return view('livewire.backend.report')->layout('layouts.backend.app');
    }
}
