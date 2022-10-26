<x-frest-layout title="Informasi" menu="informasi">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <a href="{{ url('informasisurah') }}" class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2">
                        <img src="{{ asset('img/informasi/alquran.png') }}" alt="Avatar" class="rounded-circle"/>
                      </div>
                      <div class="me-2 text-body h5 mb-0">Surah Al-Qur'an</div>
                    </a>
                    <div class="ms-auto">
                      <ul class="list-inline mb-0 d-flex align-items-center">
                        <li class="list-inline-item me-0">
                          <a href="javascript:void(0);" class="text-body"><i class="bx bx-star"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <div class="dropdown">
                            <button
                              type="button"
                              class="btn dropdown-toggle hide-arrow p-0"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="javascript:void(0);">Menu</a></li>
                              <li>
                                <hr class="dropdown-divider" />
                              </li>
                              <li>
                                <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p>
                    Daftar Surah dalam Kitab Al-Qur'an
                  </p>
                  <div class="d-flex align-items-center flex-wrap gap-1">
                    <div class="d-flex align-items-center">
                      <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                          <img class="rounded-circle" src="{{ asset('img/informasi/icon.png') }}" alt="Avatar" />
                        </li>
                        <li>
                          <small class="text-muted ms-1">+2</small>
                        </li>
                      </ul>
                    </div>
                    <div class="ms-auto">
                      <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">ISLAM</span></a>
                      {{-- <a href="javascript:;"><span class="badge bg-label-warning">Vue.JS</span></a> --}}
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</x-frest-layout>