<?php

namespace App\Http\Livewire\Backend;

use App\Models\Expense;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;

class Dashboard extends Component
{

    public $filter_date = null;
    public $month = null;
    public $year = null;
    public $total_sell_amount = 0;
    public $total_items = 0;
    public $total_active_items = 0;
    public $total_inactive_items = 0;
    public $total_categories = 0;
    public $total_active_categories = 0;
    public $total_inactive_categories = 0;
    public $total_active_online_items = 0;
    public $total_inactive_online_items = 0;
    public $total_active_online_categories = 0;
    public $total_inactive_online_categories = 0;
    public $total_expense_amount = 0;

    public function calculation()
    {
        if($this->filter_date){
            $this->month = date('m', strtotime($this->filter_date));
            $this->year = date('Y', strtotime($this->filter_date));
        }

        $this->total_sell_amount = 0;
        $invoices = Invoice::whereYear('created_at', '=', $this->year)
        ->whereMonth('created_at', '=', $this->month)
        ->get();
        foreach($invoices as $invoice){
            $this->total_sell_amount += $invoice->total_price_after_discount();
        }

        $this->total_expense_amount = Expense::whereYear('created_at', '=', $this->year)
        ->whereMonth('created_at', '=', $this->month)
        ->sum('amount');
    }


    public function mount()
    {
        $this->month = date('m');
        $this->year = date('Y');

        $this->total_items = Product::all()->count();
        $this->total_active_items = Product::where('status', true)->get()->count();
        $this->total_inactive_items = Product::where('status', false)->get()->count();

        $this->total_categories = ProductCategory::all()->count();
        $this->total_active_categories = ProductCategory::where('status', true)->get()->count();
        $this->total_inactive_categories = ProductCategory::where('status', false)->get()->count();

        $this->total_active_online_items = Product::where('online', true)->get()->count();
        $this->total_inactive_online_items = Product::where('online', false)->get()->count();
        $this->total_active_online_categories = ProductCategory::where('online', true)->get()->count();
        $this->total_inactive_online_categories = ProductCategory::where('online', false)->get()->count();
    }

    public function render()
    {
        $this->calculation();
        return view('livewire.backend.dashboard')
        ->layout('layouts.backend.app');
    }
}
