<?php 
include("header.php");
?>

 <div class="content-wrapper">

<div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <h3 class="panel-heading">Basic Form</h3>
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">User Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span> Subscribe to newsletter
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-outline">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <h3 class="panel-heading">Horizantal Form</h3>
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <label class="col-md-2 label-on-left">User Name</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 label-on-left">Email</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 label-on-left">Password</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2"></label>
                                            <div class="col-md-9">
                                                <div class="checkbox form-horizontal-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2"></label>
                                            <div class="col-md-9">
                                                <div class="form-group form-button">
                                                    <button type="submit" class="btn btn-success">Sign in</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
 </div>
		
		<?php 
include("footer.php");
?>
