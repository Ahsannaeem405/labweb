@if (Auth::user()->role != 'opereator')
    <div class="br-logo"><a href=""><span>[</span>{{ Auth::user()->name }}<span>]</span></a></div>

@else
    <div class="br-logo"><a href=""><span>[</span>{{ Auth::user()->name }}<span>]</span></a></div>

@endif

<div class="br-sideleft overflow-y-auto">

    @if (Auth::user()->role != 'operator')

        <div class="br-sideleft-menu" style="    margin-top: 15px;">
            <a href="{{ url('/admin') }}" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="fa fa-dashboard"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

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

            <a href="{{ url('/admin/view/customer') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="menu-item-label"> Customer Lookup</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="{{ url('/admin/add/customer') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    {{-- <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i> --}}
                    <span class="menu-item-label">New Customer</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->




            <a href="{{ url('/admin/customers') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="menu-item-label"> Customer</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->



            <br>
        </div><!-- br-sideleft -->
        <br>

    @else

    <div class="br-sideleft-menu" style="    margin-top: 15px;">
        <a href="{{ url('/operator') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="fa fa-dashboard"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ url('/operator/view/customer') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="menu-item-label"> Customer Lookup</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ url('/operator/add/customer') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fa fa-plus" aria-hidden="true"></i>
                {{-- <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i> --}}
                <span class="menu-item-label">New Customer</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->




        <a href="{{ url('/operator/customers') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="menu-item-label"> Customer</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <br>
    </div>
    <br>


    @endif
</div><!-- br-sideleft -->
