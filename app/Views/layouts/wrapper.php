<?php

use Config\Services;

$request = Services::request();

?>

<style>
  .logo-image {
    margin-left: 15px !important;
    margin-right: 150px !important;
    height: 180px !important;

    /* margin-left: 50px;
    margin-right: 150px;  
    height: 100px; */
  }

  /* .wrapper {
    overflow-y: auto;
    max-height: 100vh;
  }

  .iq-sidebar {
    overflow-y: auto;
    max-height: 100vh;
  } */

  /* .scroll-content{
    overflow-y: hidden;
  } */
</style>

<!-- loader Start -->
<div id="loading">
  <div id="loading-center">
  </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
  <!-- Sidebar  -->
  <div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="">
        <img src="<?= base_url('public/assets/images/LOGO-MHS-CMS.png') ?>" class="img-fluid logo-image" alt="">
      </a>
      <!-- <div class="iq-menu-bt-sidebar">
        <div class="iq-menu-bt align-self-center" style="margin-left:-20px">
          <div class="wrapper-menu">
            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
          </div>
        </div>
      </div> -->
    </div>

    <!-- admin -->
    <?php if (session('role') == "SUPER_ADMIN") { ?>
      <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu" style="padding-bottom: 50px;">
            <li class="<?= $request->uri->getSegment(2) == "dashboard" ? "active" : "" ?>">
              <a href="<?= base_url("admin/dashboard") ?>" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "active" : "" ?>">
              <a href="#user" class="iq-waves-effect <?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "true" : "false" ?>">
                <i class="ri-list-check"></i><span>List Pendaftaran</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="user" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <li class="<?= $request->uri->getSegment(2) == "member" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/member") ?>" class="iq-waves-effect"><i class="ri-shield-user-line"></i><span>Member</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "studentNew" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/studentNew") ?>" class="iq-waves-effect"><i class="ri-user-add-line"></i><span>Calon Siswa</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "studentGeneration" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/studentGeneration") ?>" class="iq-waves-effect"><i class="ri-user-3-line"></i><span>Siswa</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "parent" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/parent") ?>" class="iq-waves-effect"><i class="ri-user-3-line"></i><span>Orang Tua</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "alumni" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/alumni") ?>" class="iq-waves-effect"><i class="ri-graduation-cap-line"></i><span>Alumni</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "banner" || $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "active" : "" ?>">
              <a href="#content" class="iq-waves-effect <?= $request->uri->getSegment(2) == "banner" || $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "banner" || $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "true" : "false" ?>">
                <i class="ri-edit-line"></i><span>Content</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="content" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "banner" || $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <li class="<?= $request->uri->getSegment(2) == "banner" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/banner") ?>"><i class="ri-image-line"></i>Banner</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "news" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/news") ?>"><i class="ri-newspaper-line"></i>News</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "event" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/event") ?>"><i class="ri-newspaper-line"></i>Event</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "mediaSosial" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/mediaSosial") ?>"><i class="ri-instagram-line"></i>Media Sosial</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "testimoni" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/testimoni") ?>" class="iq-waves-effect"><i class="ri-star-fill"></i><span>Testimoni</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "caption" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/caption") ?>" class="iq-waves-effect"><i class="ri-message-2-fill"></i><span>Caption Aplikasi</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "active" : "" ?>">
              <a href="#promosi" class="iq-waves-effect <?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "true" : "false" ?>">
                <i class="ri-megaphone-fill"></i><span>Promosi</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="promosi" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <li class="<?= $request->uri->getSegment(2) == "brosur" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/brosur") ?>" class="iq-waves-effect"><i class="ri-map-2-line"></i><span>Brosur</span></a>
                </li>
                <!-- <li class="<?= $request->uri->getSegment(2) == "presentasi" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/presentasi") ?>" class="iq-waves-effect"><i class="ri-slideshow-2-line"></i><span>Presentasi</span></a>
                </li> -->
                <li class="<?= $request->uri->getSegment(2) == "partnership" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/partnership") ?>" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Partnership</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "broadcast" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/broadcast") ?>" class="iq-waves-effect"><i class="ri-broadcast-fill"></i><span>Broadcast</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "absensi" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/absensi") ?>" class="iq-waves-effect"><i class="ri-fingerprint-fill"></i><span>Absensi</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "mapel" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/mapel") ?>" class="iq-waves-effect"><i class="ri-book-fill"></i><span>Mata Pelajaran</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "nilai" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/nilai") ?>" class="iq-waves-effect"><i class="ri-edit-box-fill"></i><span>Nilai</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "modul" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/modul") ?>" class="iq-waves-effect"><i class="ri-book-2-fill"></i><span>Modul</span></a>
            </li>
          </ul>
        </nav>
        <div class="p-3"></div>
      </div>
    <?php } ?>

    <!-- client -->
    <?php if (session('role') == "ADMIN") { ?>
      <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu" style="padding-bottom: 50px;">
            <li class="<?= $request->uri->getSegment(2) == "dashboard" ? "active" : "" ?>">
              <a href="<?= base_url("admin/dashboard") ?>" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "active" : "" ?>">
              <a href="#user" class="iq-waves-effect <?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" || $request->uri->getSegment(2) == "parent" || $request->uri->getSegment(2) == "alumni" ? "true" : "false" ?>">
                <i class="ri-list-check"></i><span>List Pendaftaran</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="user" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "member" || $request->uri->getSegment(2) == "studentNew" || $request->uri->getSegment(2) == "studentGeneration" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <li class="<?= $request->uri->getSegment(2) == "member" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/member") ?>" class="iq-waves-effect"><i class="ri-shield-user-line"></i><span>Member</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "studentNew" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/studentNew") ?>" class="iq-waves-effect"><i class="ri-user-add-line"></i><span>Calon Siswa</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "studentGeneration" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/studentGeneration") ?>" class="iq-waves-effect"><i class="ri-user-3-line"></i><span>Siswa</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "parent" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/parent") ?>" class="iq-waves-effect"><i class="ri-user-3-line"></i><span>Orang Tua</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "alumni" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/alumni") ?>" class="iq-waves-effect"><i class="ri-graduation-cap-line"></i><span>Alumni</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "active" : "" ?>">
              <a href="#content" class="iq-waves-effect <?= $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" || $request->uri->getSegment(2) == "testimoni" || $request->uri->getSegment(2) == "caption" ? "true" : "false" ?>">
                <i class="ri-edit-line"></i><span>Content</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="content" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "news" || $request->uri->getSegment(2) == "event" || $request->uri->getSegment(2) == "mediaSosial" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <!-- <li class="<?= $request->uri->getSegment(2) == "banner" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/banner") ?>"><i class="ri-image-line"></i>Banner</a>
                </li> -->
                <li class="<?= $request->uri->getSegment(2) == "news" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/news") ?>"><i class="ri-newspaper-line"></i>News</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "event" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/event") ?>"><i class="ri-newspaper-line"></i>Event</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "mediaSosial" ? "active" : "" ?>">
                  <a href="<?= base_url("admin/mediaSosial") ?>"><i class="ri-instagram-line"></i>Media Sosial</a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "testimoni" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/testimoni") ?>" class="iq-waves-effect"><i class="ri-star-fill"></i><span>Testimoni</span></a>
                </li>
                <li class="<?= $request->uri->getSegment(2) == "caption" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/caption") ?>" class="iq-waves-effect"><i class="ri-message-2-fill"></i><span>Caption Aplikasi</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "active" : "" ?>">
              <a href="#promosi" class="iq-waves-effect <?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "" : "collapsed" ?>"
                data-toggle="collapse" aria-expanded="<?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "true" : "false" ?>">
                <i class="ri-megaphone-fill"></i><span>Promosi</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
              </a>
              <ul id="promosi" class="iq-submenu collapse" <?= $request->uri->getSegment(2) == "brosur" || $request->uri->getSegment(2) == "partnership" || $request->uri->getSegment(2) == "presentasi" ? "show" : "" ?>" data-parent="#iq-sidebar-toggle">
                <li class="<?= $request->uri->getSegment(2) == "brosur" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/brosur") ?>" class="iq-waves-effect"><i class="ri-map-2-line"></i><span>Brosur</span></a>
                </li>
                <!-- <li class="<?= $request->uri->getSegment(2) == "presentasi" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/presentasi") ?>" class="iq-waves-effect"><i class="ri-slideshow-2-line"></i><span>Presentasi</span></a>
                </li> -->
                <li class="<?= $request->uri->getSegment(2) == "partnership" ? "active" : "" ?>" style="margin-top:10px;">
                  <a href="<?= base_url("admin/partnership") ?>" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Partnership</span></a>
                </li>
              </ul>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "broadcast" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/broadcast") ?>" class="iq-waves-effect"><i class="ri-broadcast-fill"></i><span>Broadcast</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "absensi" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/absensi") ?>" class="iq-waves-effect"><i class="ri-fingerprint-fill"></i><span>Absensi</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "mapel" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/mapel") ?>" class="iq-waves-effect"><i class="ri-book-fill"></i><span>Mata Pelajaran</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "nilai" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/nilai") ?>" class="iq-waves-effect"><i class="ri-edit-box-fill"></i><span>Nilai</span></a>
            </li>
            <li class="<?= $request->uri->getSegment(2) == "modul" ? "active" : "" ?>" style="margin-top:10px;">
              <a href="<?= base_url("admin/modul") ?>" class="iq-waves-effect"><i class="ri-book-2-fill"></i><span>Modul</span></a>
            </li>
          </ul>
        </nav>
        <div class="p-3"></div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- Wrapper END -->