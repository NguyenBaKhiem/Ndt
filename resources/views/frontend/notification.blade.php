<div class="card mb-3">
	<div class="card-header">
		<i class="ti-layout-media-overlay-alt-2 text-primary"></i> Notifications
	</div>
	<div class="card-body">
		<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
			<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
				<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

				</div>
			</div>
			<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
				<div style="position:absolute;width:200%;height:200%;left:0; top:0">

				</div>
			</div>
		</div>
		<canvas id="myAreaChart" width="257" height="77" style="display: block; width: 257px; height: 77px;" class="chartjs-render-monitor"></canvas>
	</div>
</div>
{{-- <div class="fb-save" data-uri="https://localhost/NDT/public/home" data-size="large"></div> --}}
@section('page-plugin')

<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=116773615695121&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>

@endsection