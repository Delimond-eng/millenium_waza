@extends("layouts.app")
@section("content")
<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>Configurations</h5>
                        </div>
                    </div>

                    {{--  SETTINGS MENU  --}}
                    @include("components.setting_menu")
                    {{--  END SETTING MENU   --}}
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-8">
            @yield("settingPage")
        </div>
    </div>
</div>
@endsection
