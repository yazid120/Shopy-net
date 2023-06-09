
<?php 
include_once './views/composent/header.php';
?>

<div class="container-fluid main" style="height:100vh;padding-left:0px;">
        
        <div class="d-block d-md-none menu">
            <div class="bar"></div>
        </div>
        
        <div class="expand-menu nav flex-column">
            <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profile</a>
                <a href="#" class="nav-link"><i class="far fa-bell"></i> Notifications</a>
                <a href="#" class="nav-link"><i class="far fa-file-alt"></i> Billing Info</a>
                <a href="#" class="nav-link mb-auto"><i class="fas fa-cogs"></i> General</a>   
        </div>
        
        <div class="row align-items-center" style="height:100%">
    
        <div class="col-md-3 d-none d-md-block" style="height:100%" >
        
            <div class="container-fluid nav sidebar flex-column">
            
                <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profile</a>
                <a href="#" class="nav-link"><i class="far fa-bell"></i> Notifications</a>
                <a href="#" class="nav-link"><i class="far fa-file-alt"></i> Billing Info</a>
                <a href="#" class="nav-link mb-auto"><i class="fas fa-cogs"></i> General</a>
            
            </div>
        
        </div>
        
        <div class="col-md-9">
            
            <div class="container content clear-fix">
        
            <h2 class="mt-5 mb-5">Profile Settings</h2>
            
            <div class="row" style="height:100%">
            
                <div class="col-md-3">
                
                    <div href=# class="d-inline"><img src="https://image.flaticon.com/icons/svg/236/236831.svg" width=130px style="margin:0;"><br><p class="pl-2 mt-2"><a href="#" class="btn" style="color:#8f9096;font-weight:600">Edit Picture</a></p></div>
                    
                    
                </div>
                
                <div class="col-md-9">
                    
                    <div class="container">
                    
                        <form>
                    
                            <div class="form-group">

                                <label for=fullName>Full Name</label>
                                <input type="text" class="form-control" id="fullName">

                            </div>
                            <div class="form-group">

                                <label for=email>Email</label>
                                <input type="email" class="form-control" id="email">

                            </div>
                            <div class="form-group">

                                <label for=pass>Password</label>
                                <input type="password" class="form-control" id="pass">

                            </div>
                            <div class="form-group ">

                                <label for=birthday>Birthday</label>
                                <input type="date" class="form-control" id="birthday">

                            </div>
                            
                            <div class="row mt-5">
                            
                                <div class="col">
                                
                                    <button type="button" class="btn btn-primary btn-block">Save Changes</button>
                                
                                </div>
                                
                                <div class="col">
                                
                                    <button type="button" class="btn btn-default btn-block">Cancel</button>
                                
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
<?php 
include_once './views/composent/footer.php';
?>