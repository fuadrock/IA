@extends('layouts.master')
@section('content')

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-lg-11">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Basic Info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">TDR Info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Deposite Info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Credit Rating Info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false">Director Info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Institute Basic Info <small>Add a new Institute</small></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i> </a>
                                            <a class="close-link"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('institute.store')}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="col-sm-4 control-label">Select Type</label>

                                                        <div class="col-sm-6"><select class="form-control m-b" name="institute_type" required>
                                                                <option value="bank">BANK</option>
                                                                <option value="nbfi">NBFI</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Name</label>

                                                        <div class="col-sm-6"><input class="form-control" type="text" name="institute_name" required></div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Founding Year</label>

                                                        <div class="col-sm-6"><input class="form-control" type="number" name="institute_founding_year" required minlength="4"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label class="col-sm-4 control-label">Institute Image</label>
                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="institute_image" name="institute_image" required>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Institute Rating</label>
                                                        <div class="col-sm-6">
                                                            <fieldset class="rating">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-2 control-label">History</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="institute_description" name="institute_description" rows="3" ></textarea>
                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Mission</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input placeholder="Mission 1" name="mission[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Mission 2" name="mission[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Mission 3" name="mission[]"  class="form-control" type="text">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input placeholder="Mission 4" name="mission[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Mission 5" name="mission[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Mission 6" name="mission[]" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Core Values</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input placeholder="Core Value 1" name="core_value[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Core Value 2" name="core_value[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Core Value 3" name="core_value[]"  class="form-control" type="text">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input placeholder="Core Value 4"  name="core_value[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Core Value 5" name="core_value[]" class="form-control" type="text">
                                                            <br>
                                                            <input placeholder="Core Value 6" name="core_value[]" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-6">
                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                    <button class="btn btn-primary" type="submit" name="institute_submit">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Institute TDR Info <small>Add a new Institute</small></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i> </a>
                                            <a class="close-link"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <form id="tdr_form" method="get" class="form-horizontal" action="{{route('tDRInfo.store')}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Deposite Fund </label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon">$</span>
                                                                <input class="form-control" name="deposit_fund" type="text">
                                                                <span class="input-group-addon">( Tk. In Crore )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Loan Fund </label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon">$</span>
                                                                <input class="form-control" name="loan_fund" type="text">
                                                                <span class="input-group-addon">( Tk. In Crore )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Authorised Capital </label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon">$</span>
                                                                <input class="form-control" name="authorised_capital" type="text">
                                                                <span class="input-group-addon">( Tk. In Crore )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-4 control-label">Paid Adequacy </label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon">$</span>
                                                                <input name="paid_adequacy" class="form-control" type="text">
                                                                <span class="input-group-addon">( Tk. In Crore )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-5 control-label">NonPerforming Loan Ratio </label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group m-b">
                                                                <input name="nonperforming_loan_ratio" class="form-control" type="text">
                                                                <span class="input-group-addon">( % )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-5 control-label">Credit Deposite Ratio </label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group m-b">
                                                                <input name="credit_deposit_ratio" class="form-control" type="text">
                                                                <span class="input-group-addon">( % )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-5 control-label">Current Ratio </label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group m-b">
                                                                <input class="form-control" name="current_ratio" type="text">
                                                                <span class="input-group-addon">( % )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-5 control-label">Capital Adequacy Ratio</label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group m-b">
                                                                <input class="form-control" name="capital_adequacy_ratio" type="text">
                                                                <span class="input-group-addon">( % )</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-5 control-label">Return Of Equity </label>
                                                        <div class="col-sm-7">
                                                            <div class="input-group m-b">
                                                                <input class="form-control" name="return_of_equity" type="text">
                                                                <span class="input-group-addon">( % )</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-6">
                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                    <button class="btn btn-primary" name="tdr_submit" type="submit">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Institute Deposite Info <small></small></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            <a class="close-link"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <form method="post" class="form-horizontal" action="{{route('depositeInfo.store')}}">
                                            {{ csrf_field() }}
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">3-Month Rate</label>
                                                <div class="col-sm-8"><input name="three_month_rate" class="form-control" type="number"></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">6-Month Rate</label>
                                                <div class="col-sm-8"><input name="six_month_rate" class="form-control" type="number"></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">12-Month Rate</label>
                                                <div class="col-sm-8"><input name="twelve_month_rate" class="form-control" type="number"></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Double Money Rate</label>
                                                <div class="col-sm-8"><input name="double_money_rate" class="form-control" type="number"></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-6">
                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                    <button class="btn btn-primary" type="submit" name="deposit_submit">Save changes</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                <!-- INSTITUTE CREDIT RATING -->
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Institute Credit Rating Info <small></small></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <form method="post" class="form-horizontal" action="{{route('creditRating.store')}}">
                                            {{ csrf_field() }}
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Rating Company Name</label>
                                                <div class="col-sm-8"><input name="company_name" class="form-control" type="text" required></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Rating Year</label>
                                                <div class="col-sm-8"><input name="rating_year" class="form-control" type="text" required minlength="4"></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Short Term Rating</label>
                                                <div class="col-sm-8"><input name="short_rating" class="form-control" type="text" required></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Long Term Rating</label>
                                                <div class="col-sm-8"><input name="long_rating" class="form-control" type="text" required></div>
                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-6">
                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                    <button class="btn btn-primary" name="creditRating_submit" type="submit">Save changes</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                            <div class="panel-body">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Institute Director Info <small></small></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            <a class="close-link"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <form method="post" class="form-horizontal" action="{{route('directorInfo.store')}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Name</label>
                                                        <div class="col-sm-8"><input class="form-control" name="director_name" type="text" required></div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Position</label>
                                                        <div class="col-sm-8"><input class="form-control" type="text" name="director_position" required></div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-8"><input class="form-control" type="text" name="director_description"></div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-3 control-label">Image</label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile" name="director_iamge">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-6">
                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                    <button class="btn btn-primary" type="submit" name="director_submit">Save changes</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-11">

                <h1>Show All Institute</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    [ image ]
                                </div>
                                <div class="product-desc">
                                    <span class="product-type">
                                        NBFI
                                    </span>
                                    <small class="text-muted">1996</small>
                                    <a href="#" class="product-name">LankaBangla</a>

                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-left">
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="#" class="btn btn-xs btn-outline btn-danger" style="float:right;">Delete <i class="fa fa-basket"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    [ image ]
                                </div>
                                <div class="product-desc">
                                    <span class="product-type">
                                        BANK
                                    </span>
                                    <small class="text-muted">1986</small>
                                    <a href="#" class="product-name">BRAC</a>

                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-left">
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="#" class="btn btn-xs btn-outline btn-danger" style="float:right;">Delete <i class="fa fa-basket"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    [ image ]
                                </div>
                                <div class="product-desc">
                                    <span class="product-type">
                                        BANK
                                    </span>
                                    <small class="text-muted">1990</small>
                                    <a href="#" class="product-name">SCB</a>

                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-left">
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="#" class="btn btn-xs btn-outline btn-danger" style="float:right;">Delete <i class="fa fa-basket"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    [ image ]
                                </div>
                                <div class="product-desc">
                                    <span class="product-type">
                                        NBFI
                                    </span>
                                    <small class="text-muted">1996</small>
                                    <a href="#" class="product-name">LankaBangla</a>

                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-left">
                                        <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="#" class="btn btn-xs btn-outline btn-danger" style="float:right;">Delete <i class="fa fa-basket"></i> </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

@endsection