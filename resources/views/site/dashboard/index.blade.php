@extends('layouts.dashboard.index')
@section('title')

@endsection

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Ogene 98.3 FM Dashboard</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Listeners</h4>
                    <p><b>{{ $usersCount }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-newspaper-o fa-3x"></i>
                <div class="info">
                    <h4>Blog Posts</h4>
                    <p><b>{{ $postsCount }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-microphone fa-3x"></i>
                <div class="info">
                    <h4>Programmes</h4>
                    <p><b>{{ $programmesCount }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-handshake-o fa-3x"></i>
                <div class="info">
                    <h4>Sponsors</h4>
                    <p><b>{{ $sponsorshipsCount }}</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @livewire('loyalty-points-widget')
        </div>
        
        <div class="col-md-6">
            <div class="tile shadow-lg border-white/5 !bg-white/5">
                <h3 class="tile-title font-display text-secondary mb-6"><i class="fa fa-bolt mr-2"></i> Quick Actions</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ url('/admin/posts/create') }}" class="btn-fusion-primary !py-3 text-sm rounded-xl">
                        <i class="fa fa-plus mr-2"></i> New Post
                    </a>
                    <a href="{{ url('/admin/programmes/create') }}" class="btn-fusion-secondary !py-3 text-sm rounded-xl">
                        <i class="fa fa-microphone mr-2"></i> New Show
                    </a>
                    <a href="{{ url('/admin/manage-general-settings') }}" class="liquid-glass hover:bg-white/10 text-white !py-3 text-sm rounded-xl flex items-center justify-center font-bold">
                        <i class="fa fa-cog mr-2"></i> Settings
                    </a>
                    <a href="{{ url('/admin/activity-logs') }}" class="liquid-glass hover:bg-white/10 text-white !py-3 text-sm rounded-xl flex items-center justify-center font-bold">
                        <i class="fa fa-history mr-2"></i> Audit Logs
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
