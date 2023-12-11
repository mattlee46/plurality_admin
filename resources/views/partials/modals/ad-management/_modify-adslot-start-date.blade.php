	<!--begin::Modal header-->
	<div class="modal-header">
		<h3 class="modal-title">{{__('ad-management.modify-adslot-start-date')}}</h3>
		<!--begin::Close-->
		<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
		</div>
		<!--end::Close-->
	</div>
	<!--end::Modal header-->
	<!--begin::Modal body-->
	<form id="update_adslot_start_date_form" class="form" method="POST" action="{{ route('ad-management.update-adslot-start-date')}}" >
		<input name="checked_adslots" value="{{$checked_adslots}}" style="display: none;">
	<div class="modal-body pt-0">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 form-label mt-3">
								<span >{{__('ad-management.start-date')}}</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-sm adslot-date" name="start_date" value="" >
						</div>
						<!--end::Input group-->
					</div>
				</div>
				<!--end::Row-->
			</div>
		</div>
	</div>
	<!--end::Modal body-->
	<!--begin::Modal footer-->
	<div class="modal-footer flex-center">
		
		<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
			{{__('ad-management.cancel')}}
		</button>
		<!--end::Button-->
		<!--begin::Button-->
		<button type="submit" id="update_adslot_start_date_submit_button" class="btn btn-light-warning">
			@include('partials.general._button-indicator', ['label' => __('ad-management.confirm')])
			<!--end::Button-->
		</button>
	</div>
	</form>
	<!--end::Modal footer-->
