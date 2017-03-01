@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	MENU
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="info-box">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon bg-red"><i class="fa fa-shopping-cart"></i></span>
				  <div class="info-box-content">
				    <span class="info-box-text">Sales</span>
				    <span class="info-box-number">93,139</span>
				  </div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div>

			<div class="col-md-3">
				<div class="info-box">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>
				  <div class="info-box-content">
				    <span class="info-box-text">Orders</span>
				    <span class="info-box-number">93,139</span>
				  </div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div>

			<div class="col-md-3">
				<div class="info-box">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
				  <div class="info-box-content">
				    <span class="info-box-text">User</span>
				    <span class="info-box-number">93,139</span>
				  </div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div>

			<div class="col-md-3">
				<div class="info-box">
				  <!-- Apply any bg-* class to to the icon to color it -->
				  <span class="info-box-icon bg-blue"><i class="fa fa-line-chart"></i></span>
				  <div class="info-box-content">
				    <span class="info-box-text">Traffic</span>
				    <span class="info-box-number">93,139</span>
				  </div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="http://placehold.it/128x128" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
			</div>

			<div class="col-md-6">
				<div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">Recently Added Products</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <ul class="products-list product-list-in-box">
		                <li class="item">
		                  <div class="product-img">
		                    <img src="http://placehold.it/50x50" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Samsung TV
		                      <span class="label label-warning pull-right">$1800</span></a>
		                        <span class="product-description">
		                          Samsung 32" 1080p 60Hz LED Smart HDTV.
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="http://placehold.it/50x50" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Bicycle
		                      <span class="label label-info pull-right">$700</span></a>
		                        <span class="product-description">
		                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="http://placehold.it/50x50" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
		                        <span class="product-description">
		                          Xbox One Console Bundle with Halo Master Chief Collection.
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="http://placehold.it/50x50" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">PlayStation 4
		                      <span class="label label-success pull-right">$399</span></a>
		                        <span class="product-description">
		                          PlayStation 4 500GB Console (PS4)
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="http://placehold.it/50x50" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">PlayStation 4
		                      <span class="label label-success pull-right">$399</span></a>
		                        <span class="product-description">
		                          PlayStation 4 500GB Console (PS4)
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		              </ul>
		            </div>
		            <!-- /.box-body -->
		            <div class="box-footer text-center">
		              <a href="javascript:void(0)" class="uppercase">View All Products</a>
		            </div>
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
			</div>
		</div>

	</div>
@endsection
