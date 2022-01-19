<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.nam") }}</title>
    @include('includes.c_css')
    <!-- Smartsupp Live Chat script -->
{{-- <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '3797d56aa119729d0fea6d377b7b04545f138874';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script> --}}
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('includes.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('includes.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">
                                            {{-- {{ auth()->user()->username }} --}}here
                                        </h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                            <p class="w-75 alert alert-info">REFERAL LINK: 
                                            <input type="text" class=" form-control" value="
                                            {{-- {{ route("user.register",[auth()->user()->username]) }} --}}
                                            "></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap"><a href="
                                                {{-- {{ route("user.deposit.view",["usd"]) }} --}}
                                                " class="btn btn-icon btn-xl btn-success"><em class="icon ni ni-wallet-in"></em></a><span class="btn-extext">Deposit</span></li>
                                            <li class="btn-wrap"><a href="
                                                {{-- {{ route("user.plan.view",["all"]) }} --}}
                                                " class="btn btn-icon btn-xl btn-dim btn-outline-light"><em class="icon ni ni-arrow-from-right"></em></a><span class="btn-extext">Reinvest</span></li>
                                            <li class="btn-wrap"><a href="
                                                {{-- {{ route("user.withdraw.view") }} --}}
                                                " class="btn btn-icon btn-xl btn-warning"><em class="icon ni ni-wallet-out"></em></a><span class="btn-extext">Withdraw</span></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between-md g-2">
                                                    <div class="nk-block-head-content mt-4">
                                                        <h5 class="nk-block-title title">Overview</h5>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="row g-2">
                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Available USD balance 
                                                                        </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- ${{ number_format($account->dolla_balance,0,".",",") }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Dollar Balance
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <!--<div class="col-sm-4">-->
                                                <!--    <div class="card card-bordered text-light is-dark h-100">-->
                                                <!--        <div class="card-inner">-->
                                                <!--            <div class="nk-wg7">-->
                                                <!--                <div class="nk-wg7-stats">-->
                                                <!--                    <div class="nk-wg7-title">Available BTC balance -->
                                                <!--                        </div>-->
                                                <!--                    <div class="number-lg amount">
                                                    {{-- {{ $account->bitcoin_balance }} --}}
                                                -->
                                                <!--                    </div>-->
                                                <!--                </div>-->
                                                <!--                <div class="nk-wg7-foot">-->
                                                <!--                    <span class="nk-wg7-note">Bitcoin Balance-->
                                                <!--                        <span></span></span>-->
                                                <!--                </div>-->
                                                <!--            </div><!-- .nk-wg7 -->
                                                <!--        </div><!-- .card-inner -->
                                                <!--    </div><!-- .card -->
                                                <!--</div>-->

                                                <!--<div class="col-sm-4">-->
                                                <!--    <div class="card card-bordered text-light is-dark h-100">-->
                                                <!--        <div class="card-inner">-->
                                                <!--            <div class="nk-wg7">-->
                                                <!--                <div class="nk-wg7-stats">-->
                                                <!--                    <div class="nk-wg7-title">Available ETH balance -->
                                                <!--                        </div>-->
                                                {{-- <!--                    <div class="number-lg amount">{{ $account->ethereum_balance }}--> --}}
                                                <!--                    </div>-->
                                                <!--                </div>-->
                                                <!--                <div class="nk-wg7-foot">-->
                                                <!--                    <span class="nk-wg7-note">Ethereum Balance-->
                                                <!--                        <span></span></span>-->
                                                <!--                </div>-->
                                                <!--            </div><!-- .nk-wg7 -->
                                                <!--        </div><!-- .card-inner -->
                                                <!--    </div><!-- .card -->
                                                <!--</div>-->

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Referral USD balance </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- ${{ number_format($account->referral_balance,0,".",",") }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Referral Balance
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Deposits USD  </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- ${{ number_format($account->deposits,0,".",",") }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Total Deposits of users   
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Withdrawals  USD  </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- ${{ number_format($account->dolla_withdrawals,0,".",",") }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Total USD  withidrawn by  you   
                                                                        <span></span></span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active Investment
                                                                        </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- {{ $investments->count() }} --}}
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active investment
                                                                    </span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active deposits
                                                                        </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- {{ $deposits->count() }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active deposits
                                                                    </span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active withdrawal
                                                                        </div>
                                                                    <div class="number-lg amount">
                                                                        {{-- {{ $withdrawals->count() }} --}}here
                                                                    </div>
                                                                </div>
                                                                <div class="nk-wg7-foot">
                                                                    <span class="nk-wg7-note">Number of active withdrawal
                                                                    </span>
                                                                </div>
                                                            </div><!-- .nk-wg7 -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div>


                                            </div><!-- .row -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <!-- recent deposits -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    {{-- @if (!$deposits->isEmpty()) --}}
                                                    <h5> Your Recent Deposit </h5>
                                                    <hr>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- @foreach ($deposits as $key => $deposit) --}}
                                                            <tr>
                                                                <th scope="row">
                                                                    {{-- {{ $key + 1 }} --}}here
                                                                </th>
                                                                <td>
                                                                    {{-- {{ ucwords($deposit->message) }} --}}here
                                                                </td>
                                                                <td>
                                                                    {{-- {{ ucwords($deposit->currency) }} --}}here
                                                                </td>
                                                                <td>
                                                                    {{-- {{ number_format($deposit->amount,0,".",",") }} --}}here
                                                                </td>
                                                                <td>
                                                                    {{-- {{ ucwords($deposit->type) }} --}}here
                                                                </td>
                                                                <td 
                                                                {{-- class="{{ strtolower(config("app.tx_status")[$deposit->status]) }}" --}}
                                                                >here
                                                                {{-- {{ ucwords(config("app.tx_status")[$deposit->status]) }} --}}here
                                                            </td>
                                                                <td>
                                                                    {{-- {{ date("d M,Y",strtotime($deposit->created_at)) }} --}}here
                                                                </td>
                                                            </tr>
                                                            {{-- @endforeach --}}
                                                        </tbody>
                                                    </table>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <!-- recent investment -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}here
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    {{-- @if (!$investments->isEmpty()) --}}here
                                                    <h5> Your Active Investment </h5>
                                                    <hr>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                            
                                                                <th scope="col">#</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Current Amount</th>
                                                                <th scope="col">Start Date</th>
                                                                <th scope="col">End Date</th>
                                                                <th scope="col">Duration</th>
                                                                <th scope="col">Commission</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- @foreach ($investments as $key => $investment) --}}
                                                            <tr>
                                                                <th 
                                                            scope="row">
                                                            {{-- {{ $key + 1 }}  --}}here
                                                            </th>
                                                                <td scope="row">
                                                                    {{-- {{ ucwords($investment->message) }} --}}
                                                                 </td>
                                                                <td>
                                                                    {{-- {{ ucwords($investment->currency) }} --}}
                                                                </td>
                                                                <td>
                                                                    {{-- {{ ($investment->currency == "USD") ? number_format($investment->growth_amount,0,".",",") : $investment->growth_amount }} --}}
                                                                </td>

                                                                <td>
                                                                    {{-- {{ date("d M,Y",strtotime($investment->created_at)) }}  --}}
                                                                </td>

                                                                <td> 
                                                                    {{-- <b class="text-danger">{{ date("d M,Y",strtotime($investment->close_date)) }}</b> --}}
                                                                </td>
                                                                <td>
                                                                    {{-- {{ ucwords($investment->duration) }} --}}
                                                                </td>
                                                                <td>
                                                                    {{-- {{ ucwords($investment->percent_commission) }}% --}}
                                                                </td>



                                                                <td 
                                                                {{-- class="{{ strtolower(config("app.tx_status")[$investment->status]) }}" --}}
                                                                >here
                                                                {{-- {{ ucwords(config("app.tx_status")[$investment->status]) }} --}}here
                                                            </td>
                                                              


                                                            </tr>
                                                            {{-- @endforeach --}}
                                                        </tbody>
                                                    </table>
                                                    {{-- @else --}}
                                                        <h4 class="text-center">No  Investment at the moment</h4>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <!-- recent activities -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        {{-- @if (!$withdrawals->isEmpty()) --}}here
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    <h5> Your Recent Withdrawal </h5>
                                                    <hr>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                            
                                                                <th scope="col">#</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Method Of Payment</th>
                                                                <th scope="col">Address</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- @foreach ($withdrawals as $item => $data) --}}

                                                            <tr>
                                                                {{-- <td>
                                                                    {{ $item + 1 }} 
                                                                </td>
                                                                <td>
                                                                 {{ $data->message }}
                                                                </td>
                                                                <td>
                                                                    {{ $data->currency }}
                                                                </td>
                                                                <td>
                                                                 {{  ( $data->currency == "USD") ? number_format($data->amount,0,".",",") : $data->amount   }}
                                                                </td>
                                                                <td>
                                                                    {{ $data->withdrawal_payment_method }}
                                                                </td>
                                                                <td>
                                                                    {{ $data->withdrawal_address }}
                                                                </td>
                                                                <td>
                                                                    {{ date("d M, Y",strtotime($data->created_at ))}}
                                                                </td>
                                                                <td 
                                                                 class="{{ strtolower(config("app.tx_status")[$data->status]) }}"
                                                                    
                                                                    {{ ucwords(config("app.tx_status")[$data->status]) }}
                                                                </td> --}}here
                                                            </tr>
                                                            {{-- @endforeach --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->     
                                        {{-- @else --}}
                                          <p class="text-center">No withdrawal request now</p>   
                                        {{-- @endif --}}

                                        {{-- table ends --}}
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->



                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('includes.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('includes.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>