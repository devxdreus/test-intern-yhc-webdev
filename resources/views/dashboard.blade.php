<x-layouts.master nav="Dashboard">
  <div class="row">
    <div class="col-4">
      <div class="card card-flush h-md-50 mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header pt-5">
          <!--begin::Title-->
          <div class="card-title d-flex flex-column">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
              <!--begin::Amount-->
              <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $course }}</span>
              <!--end::Amount-->
            </div>
            <!--end::Info-->
            <!--begin::Subtitle-->
            <span class="text-gray-400 pt-1 fw-bold fs-6">Total Kursus</span>
            <!--end::Subtitle-->
          </div>
          <!--end::Title-->
        </div>
        <!--end::Header-->
      </div>
    </div>
    <div class="col-4">
      <div class="card card-flush h-md-50 mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header pt-5">
          <!--begin::Title-->
          <div class="card-title d-flex flex-column">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
              <!--begin::Amount-->
              <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $material }}</span>
              <!--end::Amount-->
            </div>
            <!--end::Info-->
            <!--begin::Subtitle-->
            <span class="text-gray-400 pt-1 fw-bold fs-6">Total Materi</span>
            <!--end::Subtitle-->
          </div>
          <!--end::Title-->
        </div>
        <!--end::Header-->
      </div>
    </div>
    <div class="col-4">

    </div>
  </div>
</x-layouts.master>
