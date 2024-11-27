<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="{{url('/admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a href="index.html">Analytical</a>
						</li>
						<li>
							<a href="index2.html">Demographic</a>
						</li>
						<li>
							<a href="index3.html">Project</a>
						</li>

					</ul>
				</li>



				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Experts</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="{{route('expert.index')}}">All Experts</a>
						</li>
						<li>
							<a href="{{route('expert.create')}}">New Experts</a>
						</li>


					</ul>
				</li>

                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#aglist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Agents</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="aglist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('agent.index')}}">All Agents</a>
						</li>
						<li>
							<a href="{{route('agent.create')}}">New Agents</a>
						</li>


					</ul>
				</li>

				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#bllist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Builders</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="bllist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('builder.index')}}">Builder List</a>
						</li>
						<li>
							<a href="{{route('builder.create')}}">New Builder</a>
						</li>


					</ul>
				</li>


				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#prlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Properties</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="prlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('property.index')}}">Property List</a>
						</li>
						<li>
							<a href="{{route('property.create')}}">Add Property</a>
						</li>


					</ul>
				</li>





			</ul>
		</div>
