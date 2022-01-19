<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('includes.a_css')
    <!-- Page Title  -->
    <title>{{ config("app.name") }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('includes.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('includes.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                  <div class="container-fluid">
                   <div class="nk-content-inner">
                    <div class="nk-content-body">
                     <div class="components-preview wide-md mx-auto">
                      <div class="nk-block-head nk-block-head-lg wide-sm">
                       <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to go_back" href="" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        {{-- <h2 class="nk-block-title fw-normal">Edit  {{ $investment->username }} Investment Request</h2> --}}
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form class="" method="POST" data-post-type="edit-plan" action="{{ route("admin.investment.view",["edit",$investment->id]) }}">

                              {{-- @csrf --}}
                              <div class="col-sm-12  form-row">
                                {{-- @if (!empty($success)) --}}
                                <span class="info_box text-success">{{ $success }}</span>
                                {{-- @endif --}}
                              </div>

                              <div class="col-sm-12  form-row">
                                {{-- @if (!empty($error)) --}}
                                <span class="info_box text-danger">{{ $error }}</span>
                                {{-- @endif --}}
                              </div>


                              <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="message"> Investment Message</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="message" class="form-control" id="message" placeholder="Enter message" value="{{ !empty(old("message")) ? old("message") : $investment->message   }}">
                                 </div>
                                 {{-- @error('message') --}}
                                 <span class="text-danger" id="error_message">{{ $message }}</span>
                                 {{-- @enderror --}}
                                </div>
                               </div>


                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="min">Investment Amount ({{ $investment->currency }})</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="amount" class="form-control" id="amount" placeholder="Enter amount" value="{{ !empty(old("amount")) ? old("amount") : number_format($investment->amount,0,"","")   }}">
                               </div>
                               {{-- @error('amount') --}}
                               <span class="text-danger" id="error_amount">{{ $message }}</span>
                               {{-- @enderror --}}
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="min">Investment Accured Amount ({{ $investment->currency }})</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="growth_amount" class="form-control" id="growth_amount" placeholder="Enter growth_amount" value="{{ !empty(old("growth_amount")) ? old("growth_amount") : number_format($investment->growth_amount,0,"","")   }}">
                               </div>
                               {{-- @error('growth_amount') --}}
                               <span class="text-danger" id="error_growth_amount">{{ $message }}</span>
                               {{-- @enderror --}}
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="duration"> Investment Duration</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="duration" class="form-control" id="duration" placeholder="Enter duration" value="{{ !empty(old("duration")) ? old("duration") : $investment->duration   }}">
                               </div>
                               {{-- @error('duration') --}}
                               <span class="text-danger" id="error_duration">{{ $duration }}</span>
                               {{-- @enderror --}}
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="percent_commission"> Investment Commission</label>
                               <div class="form-control-wrap">
                                <input required="" type="text" name="percent_commission" class="form-control" id="percent_commission" placeholder="Enter percent_commission" value="{{ !empty(old("percent_commission")) ? old("percent_commission") : $investment->percent_commission   }}">
                               </div>
                               {{-- @error('percent_commission') --}}
                               <span class="text-danger" id="error_percent_commission">{{ $percent_commission }}</span>
                               {{-- @enderror --}}
                              </div>
                             </div>


                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="status">Investment Status</label>
                               <div class="form-control-wrap">
                                <select name="status"  class="form-control">
                                  <option value="" disabled selected>Select</option>
                                  {{-- @foreach(config("app.deposit_status") as $key => $status)  --}}
                                  <option 
                                  {{-- @if ((old("status") == $key) || ($investment->status == $key)) --}}
                                            selected
                                          {{-- @endif  --}}
                                  value="{{ $key }}">{{ $status }}</option>
                                  {{-- @endforeach --}}
                              </select>
                               </div>
                               {{-- @error('status') --}}
                               <span class="text-danger" id="error_status">{{ $message }}</span>
                               {{-- @enderror --}}
                              </div>
                             </div>

                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  name="edit-plan" style="text-align:center;" class="d-block form-control btn btn-primary " >Edit Investment Record</button>
                              </div>
                             </div>
                            </div>
            
                           </form>
            
                          </div>
                         </div>
                        </div>
                       </div><!-- .card-preview -->
                      </div><!-- .nk-block -->
                     </div><!-- .nk-block -->
                    </div>
                   </div>
                  </div>
                 </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('includes.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('includes.a_scripts')
</body>

</html>