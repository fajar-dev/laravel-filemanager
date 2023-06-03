@extends('layouts.app')

@section('pageTitle', 'Arsip')

@section('content')

							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">
									<div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('assets/media/illustrations/sketchy-1/4.png')">
										<div class="card-body pt-10 pb-10">
											<div class="d-flex align-items-center">
												<div class="symbol symbol-circle me-5">
													<div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
														<i class="ki-outline ki-duotone ki-folder fs-2x text-primary"></i>
													</div>
												</div>
												<div class="d-flex flex-column">
													<h2 class="mb-1">Arsip Manager</h2>
													<div class="text-muted fw-bold">
													<a href="#">Keenthemes</a>
													<span class="mx-3">|</span>
													<a href="#">File Manager</a>
													<span class="mx-3">|</span>2.6 GB
													<span class="mx-3">|</span>758 items</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card card-flush bg-white text-black" data-theme-mode="light">
										<div class="card-body ">

                      <div id="fm-main-block">
                        <div id="fm"></div>
                      </div>
                        
                      <!-- File manager -->
                      <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
                      <script>
                          document.addEventListener('DOMContentLoaded', function() {
                            // set fm height
                            document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

                            // Helper function to get parameters from the query string.
                            function getUrlParam(paramName) {
                              const reParam = new RegExp('(?:[\?&]|&)' + paramName + '=([^&]+)', 'i');
                              const match = window.location.search.match(reParam);

                              return (match && match.length > 1) ? match[1] : null;
                            }

                            // Add callback to file manager
                            fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
                              const funcNum = getUrlParam('CKEditorFuncNum');

                              window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
                              window.close();
                            });
                          });
                      </script>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>    
<script>
  $('tbody').addClass("list");
  $('.fm').attr('id','test-list');

  var element = document.querySelector('tbody');
  var monkeyList = new List('test-list', {
  valueNames: ['fm-content-item'],
    // page: 10,
    // pagination: false
  });
  console.log('monkeyList')

</script>
@endsection