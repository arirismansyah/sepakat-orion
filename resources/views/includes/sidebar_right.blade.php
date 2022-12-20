<div class="sidebar sidebar-right sidebar-animate">
    <div class="panel panel-primary card mb-0 shadow-none border-0">
        
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu border-bottom">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                class="fe fe-user me-1"></i> Profile</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="side1">
                    <div class="card-body text-center">
                        <div class="dropdown user-pro-body">
                            <div class="">
                                <img alt="user-img" class="avatar avatar-xl brround mx-auto text-center"
                                    src="template/images/users/user.png"><span
                                    class="avatar-status profile-status bg-green"></span>
                            </div>
                            <div class="user-info mg-t-20">
                                <h6 class="fw-semibold  mt-2 mb-0">Name</h6>
                                <span class="mb-0 text-muted fs-12">Roles</span>
                                {{-- <h6 class="fw-semibold  mt-2 mb-0">{{Auth::user()->name}}</h6>
                                <span class="mb-0 text-muted fs-12">{{Auth::user()->roles}}</span> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
                        <div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">My Profile</h6>
                                <p class="tx-12 mb-0 text-muted">Profile Personal Information</p>
                            </div>
                        </div>
                    </a>
                     --}}
                    {{-- <a class="dropdown-item d-flex border-bottom" href="editprofile.html">
                        <div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">Account Settings</h6>
                                <p class="tx-12 mb-0 text-muted">Settings Information</p>
                            </div>
                        </div>
                    </a> --}}
        
                    <a class="dropdown-item d-flex border-bottom" href="{{url('logout')}}">
                        <div class="d-flex"><i class="fe fe-log-out me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">Sign Out</h6>
                                <p class="tx-12 mb-0 text-muted">Account Signout</p>
                            </div>
                        </div>
                    </a>
                </div>
                
               
            </div>
        </div>
    </div>
</div>