<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ ('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/summernote/summernote-bs4.css') }}">
  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new 
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/png;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABOFBMVEWIxcz/////4dmZYC4kJCTm5ub19fXmy8Py1s6MWCoAAACDw8qExMz/49rs7Ox/wcnZv7hzSCLc7e+aXCS50NEVFRWMUhyRxMiMnZXJ5Of/5t/v7++NyM73+/uXzNKm09jUsJ6GhoYLCwu83eGPj48bGhrr9fbQ5+qy2d3j8fP76eTV1dXe3t5ISEiboKE5QEFqOgC/v79tbW1XV1c1NTWbWRySrqmPURaiazzy0cS0hGLMo4rj2tbc086uzdDo1c+vr68aDw4pLS5yeHhbYWEYHR6lpqY0OjuQurqfm4qcjXeZf2OeeVehc0qOfWeQYjmOb1KPl4yjf16+kHHnxLS3iGmoc0jJpJHeuKe/sKOsmIp7UzGARgCTdV7LwLeiiXd4qrBUdnptl5xben5njZJEU1VOZGcXAABuDT+QAAASY0lEQVR4nNWd+0PbRhLH145tHElILcZQLFkGg42JDcRAMSQkGJuQd5NcaNKmd2mapun//x/c7kqy9Vg9dncU2u8Pd6ktLH00szOzD61QIXc1u0vba5u9lm3bloUQsiz8r1Zvc217qdvM//Qox9/GaJst2zIMlQgFRT8zDMtubeYLmhdhd7tnWwywqMhBlt3b7uZ0JXkQdtdaSFO1VDa/yPGttTwooQmbSz3LyGA5tjUNq7cE7bGghM3tlmbw2S5iS0NrbYNCwhFiPGSIGS9kSgNBQkIRdntZokpmSFXtQbVJEMLmmi3pnFFphr0GYkgAwu4mMoDxHBloE8CQ0oTdlgbnnWGpWkuaUZJwxwYJLgmMhr1zg4Q7rXzcMyijJcUoQdhtAUbPJKmqjK8KEzZ7OftngNHoCcdVUcK1HOMLk1Fb+6aEO/a35aOMgiFHiLD37fkoY+8bES6hmwHEiGjpGxDiCHNDfEQCEYeXcMm6KQM6Ui1eM3ISbt4sH2XczJGwa9+kh3oybK78z0N4cyEmKL6Aw0G49s/gI1I50n92wtY/BxAjtsAJmzdQxSRJtbOmjYyEOzecJKJSrYxFXDbCJehRGAhp2eJNJsJtiSShYSFkodWg8CfONxIytqEI14QA8fVbq0+e/PD02U/PX7w8uVWr1X70VLt18uKnn549PX7yZBVjioIaWUJqBkKBLIHpnhw/ff7iBENhstothsjno9HKq9fPfzi2BK2ZJWukE27yWlDTVo+fncSBRbWysnL7xZtjJGJKI72ESyXkBNTQ6psXxA35dHtlVHt2LMCYjphGyNcGNev4eVbThRkx5Kunq9yMqW0xhZCrDWroh5eCfA7j7ZXbz7gZ09piMiFXmtCOX/4ojDdjHD21OBlTkkYi4RIHoLb6TJLPY3x1zIuYmPqTCHc4zqQ9eSnun0HE2ytv+AiRltRhTCBsWhznOAbhcxFHP3GcmshKKMMTCDl6E3CArhWf8yGqtgghR38QEtBFfMbXFhP6i7GEPHliFZDPRRy94USMzRlxhEs8ifA/kCZ0EVeecBEiNS6gxhB2OX4b1kdnhM/5CBGKCagxhDxjFtZLYEAXkTMtxkUbNiFPua0dA2R6FiGvEWOKcCYhVyNEz6Gd1EUccbbEmKbIIuRJ9TiQwpvQK214i3Bm4mcRck0P5uGkDuHt59zdDNYEI4OQp97GhE9zcFLXTfk7iww/ZRDy/agGnQx9hJzVKVEWQs4pbO0kD0ChfIGYfhoh3OEcWdNyMaFD+AP/uI0aGQmPENqcP2mBEdbevpv/lighiuT9MCH34OgqnA1Pi/NetEPIDxgtwUOETe67Bkd4r7FYnFlRmBBpzURC/pUyYISj08XiYtWLW+KE4WATJOzyz1BAEY7uN4rFYuO0JkuIjG4CocA8LxBh7V6RqrE+kiUM9fcDhLyZAo7QA8SI92QJQxkjQCgyVQ9COHq76BEuOn4qRdiKI9wRmSdkEdZqIzK6f3JC/03+I+k21Gr3rhvFmRr3a5KEyNiJIeRN9kzC2ujk5/vr19enp6fV4inR9fX6/bc/33t3UhuNwnNuGP/k7XVjsegTjadShIG07yMUCKRhwtro3f3TYqPRWMRyvQ6rQT7Bl356/ct9B/YWsfDJO3wv8OEBPteIcoT+cOojFFsw4yesvT1thK/XL4c1KNbh0jb0t8Q5YVdsonlOWLt3moSXXcSIcoT+mYw5oeCywxlh7T4MH5E0oW8B44ywKfhbHmHNHw8l1XhbkyREqBkhFFtSMic8hQPEOXEkSzif/J4RCqWKOSGgBYneSdvQDhOKpQqPsLYOC9hYX5ElnCUMj7Anui6JEt6DBSwWT4X7+J60XpCwKRZINZUSjqrAgMXGS0pocT4R7pfaDBBuixBq2sN+A0f22ltoExYb77Gbrqw3zpZ5V2bMCbcDhCL1jGafFxdJ7qqBm7C4eO0Q4t9fFlzZ6tU1SDwZ2kWa4Ws5mBDrFSUksMuiVmz6CEUWkBpnTglTG12D1TJzVbGbrrgRWhDQXUmEhJ3UcLlqJ/B8mPB6Rrj4UHBpZmtOyD+GSOQSjnJx0mr19syGom7qjCtSQr7ZpjDhL3GEGZ2XeVi1+nZFltCZiULi6d4jPGVe4p0K0Z0UugY9zIzeo2p1XZrQSfqUUGAWa054i2XCRsVToiHveEdF7kS1uiBNiCyPULAmda+dVbEtkqtuNpvk/9IAnaPCiNVq9aU0Ia1NCaHgA00uISvQmPia9V8/fExxVML34MOHB4Qx9CuY8Of/yhLSWRokmCtmhNX3UULio2e/3b1793WiEbEJm7/io+5+wIhmhHBdnrDlEgr+vUv4S7SlEe/73/dY9Npjkwkx9F162IPIjcCE19KEdNIbCQ9BeYSMigYTmvTSv/+tkOCm2IQf785uRISweluakAxIIcF+xZzwNHrphJACfv86mbDiEv7KJHwpTUj6F0i88+sQnjI6FsRLf7/rXXqSl1bofbh7xvLS6nt5G/YooegIjUvIuHSSLMzXOIT8nhppHnyPD/vYjFiaEK6/l26HNiHkW+MVIWT2De/QPPDxrJmeLcyPH/VmtDKoUiNKE1pNTNgVfXYyqVqhhQpN5WbCUfPKh5Xxq14QkyBUu5iQbyFiRkKa89ML00YcoEPo/luGcAkTCm8ikNx1oDX1ndSO1R2TfRugCDcxofAz2jn07OEJW5hQNJT+KwhxMEWCXad/C6FVQE3hp5j/FYRGEwlPWBh5AgYIBUeinKvsIuFkYeQxAMUiXBSOFIikCyRad8/GS/MnlADEtTcS3rFE7X8jwnOZDSvUNSS+a5CdI6CfUCbQ4JSPxHcmU/vfgnCxIZzO6EX2UEviz8++BaEtt3lGC8kEKm35POvAtiBhoy88f+jKliJEmmbb+SBSwmVbfmcqSUI0n4LKhRBgWxwbSbVjlFtpQwllihlPljxhPqUNIKGsjPP8CGVbEIzUfIo3SvjP2H1Ly6d4o4QwexjK+qn2MDfABxA7jMlHGpRLQqSEfRhC+dacAyBcOgTI+EjLI9RQwlUAQAjCXPqJBPAcAhDzyfQtqLSH8IRwzRDzye9cbeVECFHRkP6h/M7AOeR8uGaI+/jyO8vCZ0QnG4Lke3VNfKzNJ2gbwjkpGWsTHi/1/Qp0NKWEAHiIjpcKj3n71IIlBIykZMxbfN7C9zOwPSjInpPRlJh7mgs2JcJV3YjOPYnPH/oFaUTAOOPMH0Ls060tAwOeAwHSOWCYlwHAGRHUhHQeHyBdQGZ9wGyP3LUYwutpAgKba4MdgqLraYTXRAWkAeVEJxeCvWSCromCCaZQM1GA5QyRLbU2MSyIoWHQMDNbmwhReyOYYANZrxG560tF1wiHZcj7KSUEiQuO3DXCouu8I1LPJaMNsI8ib5033NtHJGf24YYQXc3W6oO9QEauAgetuKlmz1tAdBHdn5SpT+FGED3NnpmB6EB5vykebaCjDPI99wSWEZFE4neG10Df9uJ7dk3s+cOYnxVbguKUo7Cvs/E9fyj2DGmMhBDzAPQ/Qwr7tioBR80F0P8csNTLgBg/zYtIoyhsG0ShZ7lFN6eJEV/ScPKg7NonhvzP40O/VE21s+835FQy8K8dDO6pANW/mEnLvKqPeihoLeoqtC+G4N4mSSdYzrKoz+ku5eChkb1NIJO+Kw31F9MYqQFbubzULbw/DWBtOpdhJ7sq5VuWfPla7MnDewwBjdYEpRkL8Ru7UAddyKMFUkX2iRLe6ytRqwsLMYwO33ffDXMiZOz1BZwSqbTlBaowpIdHlJcNo/u15fGqX/XBgqfZAzBVBw/LIQSZrY+embHnHtiAlE+rC0lyCPNxU+a+ifAvi/WcNBHxYy65kLn3JXzC0B5kIMzFTWP2L4VOGKqdDOi5KexZqWL2oBXbRzhWWqtyngVRhxxhcBS7jzBoS1Rt8ghzKuECPgo6FcfvBS20n3esuuQpdD2F8Jw+qy6/ti6ghP28AY2oLjkP2ptJnvrdmfs4PmjxnbQnO1w4NdZmuyUkIOqzgyDHSRP31Rd4NwJTam++H0TzLA7QnB/E8xa01HMXkghhxhVxGPWrzOQ7DxwDsl7COXny+y1AZmloGPXLZACehY6BCqhp7yiBSfvdSliRxngncghQA0l9z4x8xtC8MJqEaDIOAQnkGd4VJBtsNHubcfXB5H/OPMJ8CLDUNcP7nuQmvVVts1xmGcif/NmAlXJ5wPPaRbYYONGPxOtEFT0sE7EJPE8NxxjPhOQvt+UYM753TdRPNa01oIAxRnQR9ZgvnT8tb1rijFnfnSe4Dgw3wLKnGAjcGKtxX+mzP+6pooyZ338oslxRRWvluRw79UMQhfLwajysFIIfDgImJBq0xLbxzv4OS773kDp8vXJA9No3joZNH8twV2m320p7ozz/tKBvKCETCjdHnveQ8r1LllRpgyAgNWJhq60c9GcWO1A6Jap6Z+h+WKhclepK2IRUa9xzGXzvkuV6HzCyw3xOsCls1Uud+rTs4By2SzO1HcTCeB9/qLAAsZYtznDA9z7g7E3R+nSpM66v7BBii7X3Kk3ssT5ALPJ1f5dalRCajB/Qx3/wPODK+07nrCW49enr3/ssQGxEhxBbbDKuDIKA9Y3CwPNahW3Csn6lHH3OzMj/Xu5M/X0L/VnqlI4YTkqM6BFiiMODTimojfrsy3CY8Qjxn1/89Skbosi71dOjjWV9mVwQg/SZhPqcsNQJA5ZmXxFCthOQu9K5+GpkYIyLMimEKYnf+vT4wvHCMdMG5cqcMEkK24Tl8i69LZ2LDM2RmerTCQs7CQGbNMBZo2JfopmRkBVmsPreX19MvqQwajFhNJUwvga31D98jscONWV9IxthzF9fzYPTxf7nJERWvZ2RMGYlkYW+lPwNSxmyQ8WcsB5ph+3ZJ3GEh/6/SQo57sogMUJWzrCsz0cXgavtTJmONiOsl/b2gtmidDQ89BhjCPtK8ByxISc+T2QijE5+W5/+CvIRgzDzhUvYwYVoZXAUsKKyZ5IyNYHQnIZdvFP6k9UcjRTAVMJQEW4ZX6ORH8caZlFCCDvK5aBg4gLFb5L6If66WbmiOZFN2Ge04YvHnyOVXEy5zUPoR8QZ/iLKR+4vKyUSwvYuKUGJTbbmiHVaI+iVgrmBGyiTMGpCh3E/1BzTATMQ+tqik+EZqh8wYg3uGB1dNb2azBxPnJZXbx+U6dGkOB8ctFmE+jAuDF989TOmtcGMhG5btD7tx/CV2Flf39ga6OasJtMHe4clpX40nUVe0i3Uh7ssG+4yXYW6S+dP1WNMbYNZCUnSYAUYvyas6yQovn6DXh4MBmV9di908h0r0Zhb7YRTdSZfnOaYkiZ4CHFf6o+/Y++qc9rDmNor5uOk7/Shkniu0sXRJ1xuaYmJnpOwoE+SAbGfxtRu/NL7KaciJ9u2rKRSjZ+wUH6cVoLFFeD8im+Enup9fZARMDNhoXKZ1DYgEQ9Ty9nOrlnOet3ZCQuFrZTWEVef8klPB8QVRlYD8hEWho9S3KcubUV9kAGwU+9zXDUPYWGwn+Kp7b2Yzl5WwP5uOmB7f8Bz0VyEhcJGiqcqG7qEGfVhKTXI4FPwXTInYWE4Sb7J7cO+MKIe7mMxVJ8MOa+Yl7BgHiSbsVMai3mqjmvUdAMemLwXzE2IzdhOMePBgN+MujkupTbBepvXgGKEhcq0ndhc6vW9xGKNBdg/TMtFuCs9rQhcrQghNuN+8vW0d8c8jHp/Gh3JCUvZFzCgMGGhuZfsqh3MmDGq6mZ/I4uD7iWMieZAiCPOVEm87Z320d4gHRJ3EA/q6WWaMuWOMNKEhUL/Mrk5ltr16TAJEn/V39pNvlHOzbrkKWLgCAljyuV1lMnBuK+bEUxd183BcGu3nd7+OooMnyRhwZsDTDRAZ//gaogxMSeVaZrl4XjjcJIBD/PtSvFJE1JfTW9G7baiHB1eHmxsbUwPLnc7SjsLHYkvcvYDIcT1+MajlAbpcnY69Xod/2+Wg+l9ebTBVWPnRojj6t5+erzgVEfZ3xOOn36BEGL1p0omQ2bEaytTafd0BUWIa7nxZTZvTcd7dDkWqc/YgiPEKo8v20qmScNY1ZX25Tj7IEwGgRJimcPpI1F/xb75aDoEaXw+QRMS9a8uS+121pDpwOGEUrq8gmp7fuVBSNQfTw8nCs56aZw4hbSVyeF0nAcdUV6ERPpgvHWw/0ghC/bCqASM1AGP9g+2xgM9x6vIk9BRpdIfjq+2ppe7+4+PJpPSZHL0eH/3crp1NR72K3AxM07/B+P9dq0Vr03TAAAAAElFTkSuQmCC" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Task</th>
      <th>Progress</th>
      <th style="width: 40px">Label</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Update software</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
        </div>
      </td>
      <td><span class="badge bg-danger">55%</span></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Clean database</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar bg-warning" style="width: 70%"></div>
        </div>
      </td>
      <td><span class="badge bg-warning">70%</span></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Cron job running</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-primary" style="width: 30%"></div>
        </div>
      </td>
      <td><span class="badge bg-primary">30%</span></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Fix and squish bugs</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
      </td>
      <td><span class="badge bg-success">90%</span></td>
    </tr>
  </tbody>
</table>
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td>5.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 6
            </td>
            <td>Win 98+</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td>7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td>1.9</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.2</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.4</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td>Gnome</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td>OSX.3</td>
            <td>125.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td>OSX.3</td>
            <td>312.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td>OSX.4+</td>
            <td>419.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td>OSX.4+</td>
            <td>522.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td>OSX.4+</td>
            <td>420</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td>iPod</td>
            <td>420.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Webkit</td>
            <td>S60</td>
            <td>S60</td>
            <td>413</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td>Win 95+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td>Win 88+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td>Win 88+ / OSX.3+</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td>Wii</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Nokia N800</td>
            <td>N800</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td>Nintendo DS</td>
            <td>8.5</td>
            <td>C/A<sup>1</sup></td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td>3.1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>
            <td>3.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td>3.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td>1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td>1</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td>-</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td>-</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td>-</td>
            <td>U</td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.content-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
