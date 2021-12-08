<div>
    <x-slot name="header">
        <div class="sub-header">
            <div class="d-flex align-items-center flex-wrap mr-auto">
                <h5 class="dashboard_bar">Setting</h5>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="btn btn-xs btn-primary light logout-btn">Dashboard</a>
            </div>
        </div>
    </x-slot>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">{{ __('Setting') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                                    <div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Application Title </label>
                                            <input type="text" class="form-control" placeholder="Best ecommerce site"
                                                wire:model="application_title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Frontend Logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input form-control"
                                                        accept="image/*" wire:model="frontend_logo">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                            <div wire:loading="" wire:target="frontend_logo">Uploading...</div>
                                            <img src="{{ get_static_option('frontend_logo') ?? 'assets/frontend/images/layout-2/logo/logo.png' }}" width="200" alt="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>