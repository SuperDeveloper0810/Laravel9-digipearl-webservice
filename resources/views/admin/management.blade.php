<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grexa - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="../admin/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../admin/css/style.css">
    <link rel="stylesheet" href="../admin/css/components.css">
    <link rel="stylesheet" href="../admin/css/custom.css">
    <link rel="stylesheet" href="../admin/bundles/bootstrap-fileinput/bootstrap-fileinput.css">
    <link rel="stylesheet" href="../admin/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../admin/bundles/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="../admin/bundles/summernote/summernote-bs4.css">
   <link rel="stylesheet" href="../admin/bundles/codemirror/lib/codemirror.css">
   <link rel="stylesheet" href="../admin/bundles/codemirror/theme/duotone-dark.css">
   <!-- <link rel="stylesheet" href="../admin/bundles/jquery-selectric/selectric.css"> -->
    <!-- Custom style CSS -->
    <link rel='shortcut icon' type='image/x-icon' href='../admin/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">

                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>

                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <span class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                    <span class="dropdown-item-desc">
                                        New Order
                                        <span class="time">3 Hours Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <span class="dropdown-item-icon bg-info text-white">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </span>
                                    <span class="dropdown-item-desc">
                                        Application Error
                                        <span class="time">7 Hours Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-icon bg-success text-white">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                    </span>
                                    <span class="dropdown-item-desc">
                                        Server restarted
                                        <span class="time">9 Hours Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-icon bg-danger text-white">
                                        <i class="fa fa-server" aria-hidden="true"></i>
                                    </span>
                                    <span class="dropdown-item-desc">
                                        Your Subscription Expired
                                        <span class="time">10 Hours Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-icon bg-purple text-white">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </span>
                                    <span class="dropdown-item-desc">
                                        You have <b>4</b> new followers
                                        <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-1.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">Michael Gardner</span>
                                        <span class="time messege-text">Analysis Project and Design Flowchart</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-2.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">Nancy Burton</span>
                                        <span class="time messege-text">Client meeting is cancelled</span>
                                        <span class="time">5 Hour Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-5.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">Amiah Smith</span>
                                        <span class="time messege-text">Project Planning</span>
                                        <span class="time">12 Hour Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-4.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">John Doe</span>
                                        <span class="time messege-text">Leave application !!</span>
                                        <span class="time">1 Days Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-3.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">Wiltor Stone</span>
                                        <span class="time messege-text">Discussion about increment!</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../admin/img/users/user-2.png" class="image-square">
                                    </span>
                                    <span class="dropdown-item-desc">
                                        <span class="message-user">Nancy Burton</span>
                                        <span class="time messege-text">Upcoming project meeting</span>
                                        <span class="time text-primary">3 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li> -->

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/uploads/avatars/default.png" class="user-img-radious-style">
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Hello Jessica Hill</div>
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- modal part -->
            <!-- User modal -->
            <div class="modal fade" id="newUserModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form method="POST" action="javascript:;" class="needs-validation createUserForm"
                        enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">User Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row" style="text-align: center; display:block">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                                style="width: 200px; height: 150px;">
                                            </div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">
                                                        Select image </span>
                                                    <span class="fileinput-exists">
                                                        Change </span>
                                                    <input class="form-control" type="file" name="user_avatar" required>
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput">
                                                    Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6 m-0 pl-0">
                                            <label>UserName</label>
                                            <input type="text" name="user_name" class="form-control" required="">
                                        </div>
                                        <div class="form-group col-6 m-0 pr-0">
                                            <label>FullName</label>
                                            <input type="text" name="full_name" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6 m-0 pl-0">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="create_password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password" required>
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6 m-0 pr-0">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input type="password" class="form-control" name="rpassword" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Position</label>
                                            <input type="text" name="position" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-whitesmoke br">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form method="POST" action="javascript:;" class="needs-validation editUserForm"
                        enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">User Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row" style="text-align: center; display:block">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail user-avatar"
                                                data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            </div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">
                                                        Select image </span>
                                                    <span class="fileinput-exists">
                                                        Change </span>
                                                    <input class="form-control" type="file" name="user_avatar" required>
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput">
                                                    Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6 m-0 pl-0">
                                            <label>UserName</label>
                                            <input type="text" name="user_name" class="form-control user-name"
                                                required="">
                                        </div>
                                        <div class="form-group col-6 m-0 pr-0">
                                            <label>FullName</label>
                                            <input type="text" name="full_name" class="form-control user-full-name"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6 m-0 pl-0">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="edit_password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password" required>
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6 m-0 pr-0">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input type="password" class="form-control" name="rpassword" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Position</label>
                                            <input type="text" name="position" class="form-control user-position"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Description</label>
                                            <textarea class="form-control user-description"
                                                name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-whitesmoke br">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Post modal -->
            <div class="modal fade bd-example-modal-lg" id="PostModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
                    <form method="post" action="javascript:;" class="needs-validation PostForm"
                        enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Post Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Post Title</label>
                                            <input type="text" name="postTitle" class="form-control post-title" required="">
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: center; display:block">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail post-image" data-trigger="fileinput">
                                            </div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">
                                                        Select image </span>
                                                    <span class="fileinput-exists">
                                                        Change </span>
                                                    <input type="file" name="postImage">
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput">
                                                    Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group w-100">
                                            <label>Post Content</label>
                                            <textarea class="ckeditor form-control post-content" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                             <div id="editor2_error">
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-whitesmoke br">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact info modal -->
            <div class="modal fade" id="ContactInfoModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <form method="post" action="javascript:;" class="needs-validation ContactInfoForm"  enctype="multipart/form-data">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalCenterTitle">Contact Info Modal</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <div class="container">
                                 <div class="row">
                                     <div class="form-group w-100">
                                         <label>Contact Info Type</label>
                                         <input type="text" name="contactInfoType" class="form-control contact-info-type" required="">
                                     </div>
                                     <div class="form-group w-100">
                                         <label>Contact Info</label>
                                         <input type="text" name="contactInfoValue" class="form-control contact-info-value" required="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer bg-whitesmoke br">
                             <button type="submit" data-dismiss="true" class="btn btn-primary">Save</button>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         </div>
                     </div>
                  </form>
                </div>
            </div>

            <!-- Menu modal -->
            <div class="modal fade" id="MenuModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <form method="post" action="javascript:;" class="needs-validation MenuForm"  enctype="multipart/form-data">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalCenterTitle">Menu Modal</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="container">
                                 <div class="row">
                                    <div class="form-group w-100">
                                       <label>Menu Name</label>
                                       <input type="text" name="menuName" class="form-control" required="">
                                    </div>
                                    <div class="form-group w-100">
                                       <label>Menu Link</label>
                                       <input type="text" name="menuLink" class="form-control" required="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                           <button type="submit" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
                </div>
            </div>

            <!-- Service modal -->
            <div class="modal fade" id="ServiceModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <form method="post" action="javascript:;" class="needs-validation ServiceForm"  enctype="multipart/form-data">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalCenterTitle">Service Modal</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="container">
                                 <div class="row">
                                    <div class="form-group w-100">
                                       <label>Service Name</label>
                                       <input type="text" name="serviceName" class="form-control service-name" required="">
                                    </div>
                                    <div class="form-group w-100">
                                       <label>Service Link</label>
                                       <input type="text" name="serviceLink" class="form-control service-link" required="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                           <button type="submit" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
                </div>
            </div>

            <!-- Review modal -->
            <div class="modal fade" id="ReviewModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <form method="post" action="javascript:;" class="needs-validation w-100 ReviewForm"  enctype="multipart/form-data">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalCenterTitle">Review Modal</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="container">
                                 <div class="row">
                                    <div class="form-group w-100">
                                       <label>Review Description</label>
                                       <textarea class="form-control review-description" name="reviewContent" rows="10"
                                             required=""></textarea>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                           <button type="submit" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
                </div>
            </div>

            <!-- Price Info modal -->
            <div class="modal fade" id="PriceModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <form method="post" action="javascript:;" class="needs-validation w-100 PriceForm"  enctype="multipart/form-data">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalCenterTitle">Review Modal</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="container">
                                 <div class="row">
                                    <div class="form-group w-100">
                                       <label>Menu Name</label>
                                       <input type="text" name="menuName" class="form-control" required="">
                                    </div>
                                    <div class="form-group w-100">
                                       <label>Menu Link</label>
                                       <input type="text" name="menuLink" class="form-control" required="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                           <button type="submit" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content table-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Management</h1>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <!-- User management -->
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Users</h4>
                                        <button class="btn btn-info btn-user-create" data-toggle="modal" data-target="#newUserModal">New
                                            User</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th>No</th> -->
                                                    <th>Avatar</th>
                                                    <th>User Name</th>
                                                    <th>Full Name</th>
                                                    <th>Position</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <td>
                                                            <figure class="avatar round mr-2">
                                                                <img src="{{ $user->avatar_url }}" alt="...">
                                                            </figure>
                                                        </td>
                                                        <td>{{ $user->user_name }}</td>
                                                        <td>{{ $user->full_name }}</td>
                                                        <td>
                                                            <div class="badge badge-success">{{ $user->position }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="btn btn-outline-warning btn-sm btn-icon btn-user-edit"
                                                                data-id="{{ $user->id }}"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a href="#"
                                                                class="btn btn-outline-danger btn-sm btn-icon btn-user-delete"
                                                                data-id="{{ $user->id }}"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination">
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact info management -->
                            <div class="col-12 col-md-12 col-lg-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Contact Infos</h4>
                                        <button class="btn btn-info btn-contact-create" data-toggle="modal"
                                            data-target="#ContactInfoModal">New Contact Info</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th>No</th> -->
                                                    <th>Type</th>
                                                    <th>Information</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach ($contact_infos as $contact_info)
                                                   <tr>
                                                      <!-- <td>1</td> -->
                                                      <td>{{$contact_info->type}}</td>
                                                      <td>{{$contact_info->info}}</td>
                                                      <td>
                                                         <a href="#" class="btn btn-outline-warning btn-sm btn-icon btn-contact-edit" data-id="{{ $contact_info->id }}"><i
                                                                  class="far fa-edit"></i></a>
                                                         <a href="#" class="btn btn-outline-danger btn-sm btn-icon btn-contact-delete" data-id="{{ $contact_info->id }}"><i
                                                                  class="fas fa-trash-alt"></i></a></td>
                                                   </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Post management -->
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Posts</h4>
                                        <button class="btn btn-info btn-post-create" data-toggle="modal" data-target="#PostModal">New
                                            Post</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th style="width:5%">No</th> -->
                                                    <th style="width:10%">Image</th>
                                                    <th style="width:20%">Title</th>
                                                    <th>Content</th>
                                                    <th style="width:15%">Action</th>
                                                </tr>
                                                @foreach ($posts as $post)
                                                   <tr>
                                                      <!-- <td>1</td> -->
                                                      <td>
                                                         <figure class="avatar square mr-2 avatar-xl post-image">
                                                            <img src="{{$post->image_url}}" alt="...">
                                                         </figure>
                                                      </td>
                                                      <td>{{$post->title}}</td>
                                                      <td>
                                                         <?php 
                                                            echo $post->content
                                                         ?>
                                                      </td>
                                                      <td>
                                                         <a href="#"
                                                               class="btn btn-outline-warning btn-sm btn-icon btn-post-edit"
                                                               data-id="{{ $post->id }}"><i
                                                                  class="far fa-edit"></i></a>
                                                         <a href="#"
                                                               class="btn btn-outline-danger btn-sm btn-icon btn-post-delete"
                                                               data-id="{{ $post->id }}"><i
                                                                  class="fas fa-trash-alt"></i></a>
                                                      </td>
                                                   </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                                {{ $posts->links() }}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Post management -->
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Prices</h4>
                                        <button class="btn btn-info btn-post-create" data-toggle="modal" data-target="#PriceModal">New Price Info</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th style="width:5%">No</th> -->
                                                    <th style="width:10%">Website Type</th>
                                                    <th>Domain Name</th>
                                                    <th>Price</th>
                                                    <th>Free Hosting</th>
                                                    <th>WebSite Build Type</th>
                                                    <th>Design Logo</th>
                                                    <th>Create Social Media branding</th>
                                                    <th>Email Marketing</th>
                                                    <th>24/7 Support</th>
                                                    <th>Free Technical Consultation anytime</th>
                                                    <th>Action</th>
                                                </tr>
                                                   <tr>
                                                        <td class="text-danger">
                                                            Business website
                                                        </td>
                                                        <td>Domain.com</td>
                                                        <td class="text-danger">$5500</td>
                                                        <td class="text-success" style="text-align: center;">
                                                            <i class="fas fa-check"></i>
                                                        </td>
                                                        <td>Develop complete website </td>
                                                        <td class="text-success" style="text-align: center;">
                                                            <i class="fas fa-check"></i>
                                                        </td>
                                                        <td class="text-danger" style="text-align: center;">
                                                            <i class="fas fa-times"></i>
                                                        </td>
                                                        <td class="text-danger" style="text-align: center;">
                                                            <i class="fas fa-times"></i>
                                                        </td>
                                                        <td class="text-success" style="text-align: center;">
                                                            <i class="fas fa-check"></i>
                                                        </td>
                                                        <td class="text-danger" style="text-align: center;">
                                                            <i class="fas fa-times"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="btn btn-outline-warning btn-sm btn-icon btn-post-edit"
                                                                data-id="{{ $post->id }}"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a href="#"
                                                                class="btn btn-outline-danger btn-sm btn-icon btn-post-delete"
                                                                data-id="{{ $post->id }}"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                   </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                                {{ $posts->links() }}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <!-- Menu management-->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Menus</h4>
                                        <button class="btn btn-info btn-menu-create" data-toggle="modal" data-target="#MenuModal">New
                                            Menu</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th>No</th> -->
                                                    <th>Menu Name</th>
                                                    <th>Link</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach ($menus as $menu)
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <td>{{ $menu->name }}</td>
                                                        <td>
                                                            <div class="badge badge-success">{{ $menu->link }}</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-warning btn-sm btn-icon btn-menu-edit" data-id="{{ $menu->id }}"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm btn-icon btn-menu-delete" data-id="{{ $menu->id }}"><i
                                                                    class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Service management -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Services</h4>
                                        <button class="btn btn-info btn-service-create" data-toggle="modal"
                                            data-target="#ServiceModal">New Service</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th>No</th> -->
                                                    <th>Service Name</th>
                                                    <th>Service Link</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach ($services as $service)
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <td>{{ $service->name }}</td>
                                                        <td>
                                                            <div class="badge badge-success">{{ $service->link }}</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-warning btn-sm btn-icon btn-service-edit" data-id="{{ $service->id }}"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm btn-icon btn-service-delete" data-id="{{ $service->id }}"><i
                                                                    class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Review management -->
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Reviews</h4>
                                        <button class="btn btn-info btn-review-create" data-toggle="modal"
                                            data-target="#ReviewModal">New Review</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <!-- <th style="width:5%">No</th> -->
                                                    <th>Content</th>
                                                    <th style="width:15%">Action</th>
                                                </tr>
                                                @foreach ($reviews as $review)
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <td>
                                                            <div>{{ $review -> content }} </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-outline-warning btn-sm btn-icon btn-review-edit" data-id="{{$review->id}}"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-outline-danger btn-sm btn-icon btn-review-delete" data-id="{{$review->id}}"><i
                                                                    class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Theme Customizer</div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Theme Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label> <span class="control-label p-r-20">Light</span>
                                        <input type="radio" name="custom-switch-input" value="1"
                                            class="custom-switch-input" checked> <span
                                            class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                                <div class="selectgroup layout-color  w-50">
                                    <label> <span class="control-label p-r-20">Dark&nbsp;</span>
                                        <input type="radio" name="custom-switch-input" value="2"
                                            class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Sidebar Colors</h6>
                            <div class="sidebar-setting-options">
                                <ul class="sidebar-color list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="blue">
                                        <div class="blue"></div>
                                    </li>
                                    <li title="coral">
                                        <div class="coral"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="allports">
                                        <div class="allports"></div>
                                    </li>
                                    <li title="barossa">
                                        <div class="barossa"></div>
                                    </li>
                                    <li title="fancy">
                                        <div class="fancy"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Theme Colors</h6>
                            <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="blue">
                                        <div class="blue"></div>
                                    </li>
                                    <li title="coral">
                                        <div class="coral"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="allports">
                                        <div class="allports"></div>
                                    </li>
                                    <li title="barossa">
                                        <div class="barossa"></div>
                                    </li>
                                    <li title="fancy">
                                        <div class="fancy"></div>
                                    </li>
                                    <li title="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li title="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                        <div class="green"></div>
                                    </li>
                                    <li title="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Layout Options</h6>
                            <div class="theme-setting-options">
                                <label> <span class="control-label p-r-20">Compact
                                        Sidebar Menu</span> <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input" id="mini_sidebar_setting"> <span
                                        class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 align-center">
                            <a href="#" class="btn btn-sm btn-icon icon-left btn-outline-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Snkthemes</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../admin/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script type="text/javascript" src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js">
    </script>
    <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../admin/bundles/jquery-pwstrength/jquery.pwstrength.min.js" type="text/javascript"></script>
    <script src="../admin/bundles/jquery-selectric/jquery.selectric.min.js" type="text/javascript"></script>
    <script src="../admin/bundles/izitoast/js/iziToast.min.js" type="text/javascript"></script>
    <script src="../admin/bundles/sweetalert/sweetalert.min.js" type="text/javascript"></script>

    <!-- Page Specific JS File -->
    <script src="../admin/js/page/auth-register.js" type="text/javascript"></script>
    <script src="../admin/js/page/toastr.js" type="text/javascript"></script>
    <script src="../admin/js/page/sweetalert.js" type="text/javascript"></script>
    <!-- Template JS File -->
    <script src="../admin/js/scripts.js" type="text/javascript"></script>

    <!-- Customize JS File -->
    <script src="../admin/js/management.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            Management.init();
        });

    </script>
</body>

</html>
