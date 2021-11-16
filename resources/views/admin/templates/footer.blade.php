<footer class="main-footer">
  
  &copy; {{ date('Y') }} <a href="#">Ridwan Admin </a>. All Rights Reserved.
</footer>

<aside class="control-sidebar">

  <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white"
        data-toggle="control-sidebar"></i></span> </div> <!-- Create the tabs -->
  <ul class="nav nav-tabs control-sidebar-tabs">
    <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i
          class="ti-comment-alt"></i></a></li>
    <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab" title="Comments"><i
          class="ti-tag"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <div class="lookup lookup-sm lookup-right d-none d-lg-block mb-20">
        <input type="text" name="s" placeholder="Search" class="w-p100">
      </div>
      <div class="media-list media-list-hover">
        <a class="media media-single" href="#">
          <h4 class="w-50 text-gray font-weight-500">10:10</h4>
          <div class="media-body pl-15 bl-5 rounded border-primary">
            <p>Morbi quis ex eu arcu auctor sagittis.</p>
            <span class="text-fade">by Johne</span>
          </div>
        </a>

        <a class="media media-single" href="#">
          <h4 class="w-50 text-gray font-weight-500">08:40</h4>
          <div class="media-body pl-15 bl-5 rounded border-success">
            <p>Proin iaculis eros non odio ornare efficitur.</p>
            <span class="text-fade">by Amla</span>
          </div>
        </a>

        <a class="media media-single" href="#">
          <h4 class="w-50 text-gray font-weight-500">07:10</h4>
          <div class="media-body pl-15 bl-5 rounded border-info">
            <p>In mattis mi ut posuere consectetur.</p>
            <span class="text-fade">by Josef</span>
          </div>
        </a>

        <a class="media media-single" href="#">
          <h4 class="w-50 text-gray font-weight-500">01:15</h4>
          <div class="media-body pl-15 bl-5 rounded border-danger">
            <p>Morbi quis ex eu arcu auctor sagittis.</p>
            <span class="text-fade">by Rima</span>
          </div>
        </a>

        <a class="media media-single" href="#">
          <h4 class="w-50 text-gray font-weight-500">23:12</h4>
          <div class="media-body pl-15 bl-5 rounded border-warning">
            <p>Morbi quis ex eu arcu auctor sagittis.</p>
            <span class="text-fade">by Alaxa</span>
          </div>
        </a>

      </div>
    </div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <div class="media-list media-list-hover media-list-divided">
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/1.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
            <p>Cras tempor diam nec metus...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/2.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
            <p>Praesent tristique diam...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/1.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
            <p>Cras tempor diam nec...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/2.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
            <p>Praesent tristique diam...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/1.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
            <p>Cras tempor diam nec metus...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/2.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
            <p>Praesent tristique diam...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/1.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
            <p>Cras tempor diam nec...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
        <div class="media">
          <img class="avatar avatar-lg" src="{{ asset('assets/admin/images/avatar/2.jpg') }}" alt="...">

          <div class="media-body">
            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
            <p>Praesent tristique diam...</p>
            <div class="media-block-actions">
              <nav class="nav nav-dot-separated no-gutters">
                <div class="nav-item">
                  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                </div>
              </nav>

              <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                <a class="nav-link text-success" href="#" data-toggle="tooltip" title=""
                  data-original-title="Approve"><i class="ion-checkmark"></i></a>
                <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i
                    class="ion-close"></i></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->

<div class="control-sidebar-bg"></div>