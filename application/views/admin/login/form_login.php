<?php 
    $data['title'] = $title;
    $this->load->view('admin/head',$data);
 ?>

<body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Ace</span>
                                    <span class="white" id="id-text2">Application</span>
                                </h1>
                                <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
                            </div>

                            <div class="space-6"></div>


                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Please Enter Your Information
                                            </h4>

                                            <div class="space-6"></div>

                                            <form action="<?php echo base_url('index.php/login/check'); ?>" method="post" onsubmit="return validasi(); ">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input id="user" name="user" type="text" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <?php
                                                    $notif = $this->session->flashdata('notif');
                                                    if(!empty($notif)): ?>
                                                    <div class="block clearfix">
                                                        <div class="alert alert-danger">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <i class="ace-icon fa fa-times"></i>
                                                            </button>
                                                            <strong>
                                                                <i class="ace-icon fa fa-exclamation-circle"></i>
                                                            </strong>
                                                            <?php echo $notif; ?>
                                                        </div>  
                                                    </div>
                                                    <?php endif; ?>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Login</span>
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>                                         
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    function validasi(){

        if(!$("#user").val())
        {
            alert("Username tidak boleh kosong");
            $("#user").focus();
            return false;
        }

        if(!$("#pass").val())
        {
            alert("Password tidak boleh kosong");
            $("#pass").focus();
            return false;
        }
    }
</script>

<?php 
    $this->load->view('admin/foot');
 ?>