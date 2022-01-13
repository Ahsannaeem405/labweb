
    <div class="br-logo"><img src="{{ asset('assets/images/logo1.png') }}" class="img-logo" style="width:10%;" alt=""></div>





<div class="br-sideleft overflow-y-auto">


    @php $role=\Illuminate\Support\Facades\Auth::user()->role; @endphp

        <div class="br-sideleft-menu" style="    margin-top: 15px;">
            <a href="{{ url("$role") }}" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="fa fa-dashboard"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
@if($role=='admin')
            <a href="{{ url('/admin/add/operator') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="menu-item-label">Add Operator</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="{{ url('/admin/view/operator') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="menu-item-label">View Operator</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
@endif
            <a href="{{ url("/$role/view/customer") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="menu-item-label"> Customer Lookup</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="{{ url("/$role/add/customer") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    {{-- <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i> --}}
                    <span class="menu-item-label">New Customer</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->




            <a href="{{ url("/$role/customers") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="menu-item-label"> Customer</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <p>Orders</p>

            <a href="{{ url("/$role/pending/invoice") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fas fa-file-invoice"></i>
                    <span class="menu-item-label"> Pending to invoice</span>
                </div><!-- menu-item -->
            </a>
            <a href="{{ url("/$role/pending/results") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fas fa-poll"></i>
                    <span class="menu-item-label"> Pending Results</span>
                </div><!-- menu-item -->
            </a>
            <a href="{{ url("/$role/pending/release") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fab fa-first-order-alt"></i>

                    <span class="menu-item-label"> Pending Release</span>
                </div><!-- menu-item -->
            </a>
            <a href="{{ url("/$role/released") }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fas fa-check-circle"></i>
                    <span class="menu-item-label"> Released</span>
                </div><!-- menu-item -->
            </a>




            <br>
        </div><!-- br-sideleft -->
        <br>




</div><!-- br-sideleft -->
