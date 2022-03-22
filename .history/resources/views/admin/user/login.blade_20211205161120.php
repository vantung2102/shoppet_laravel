@extends('admin.layout.login')

@section('content')

  <div class="connect-container align-content-stretch d-flex flex-wrap">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5">
            <div class="auth-form">
              <div class="row">
                <div class="col">
                  <div class="logo-box">
                    <a href="#" class="logo-text">TP&SHOPPET ADMIN</a>
                  </div>
                  @include('admin.error.alert')
                  <form action="/admin/login/processLogin" method="post">
                    <div class="form-group" style="margin-bottom: 1rem">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                        placeholder="Enter email"
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="password"
                        placeholder="Password"
                      />
                    </div>
                    <button
                      type="submit"
                      class="btn btn-primary btn-block btn-submit"
                      style="width: 100%"
                    >
                      Đăng nhập
                    </button>
                    <div class="auth-options">
                      <div class="custom-control custom-checkbox form-group">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="exampleCheck1"
                          name="remember"
                        />
                        <label class="custom-control-label" for="exampleCheck1"
                          >Nhớ mật khẩu</label
                        >
                      </div>
                      <a href="#" class="forgot-link">Quên mật khẩu</a>
                    </div>
                    @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block d-xl-block">
            <div class="auth-image">
              <svg
                id="ad3acef6-40f9-4409-a616-f2253c54cee5"
                data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg"
                width="910.22541"
                height="801.7228"
                viewBox="0 0 910.22541 801.7228"
              >
                <title>fingerprint</title>
                <path
                  d="M916.05633,347.306C872.76877,177.08944,723.19661,54.2169,547.63127,49.28859,454.81514,46.68315,357.14665,77.46612,286.0368,185.187c-127.11654,192.56269,7.81161,325.62942,101.87995,388.86007A588.60924,588.60924,0,0,1,509.57992,683.39751C573.12,758.79805,695.35669,852.49382,840.935,705.687,946.45041,599.28117,944.89012,460.687,916.05633,347.306Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#f2f2f2"
                />
                <ellipse cx="455" cy="730.7228" rx="455" ry="23" fill="#3f3d56" />
                <ellipse
                  cx="732.18193"
                  cy="768.7228"
                  rx="178.04348"
                  ry="9"
                  fill="#3f3d56"
                />
                <ellipse
                  cx="396.05573"
                  cy="792.7228"
                  rx="178.04348"
                  ry="9"
                  fill="#3f3d56"
                />
                <path
                  d="M826.2655,399.3038s30.24614-.44137,23.80221,8.65362-31.44446,8.45972-31.44446,8.45972Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ffb9b9"
                />
                <path
                  d="M733.228,287.14939l30.60963,41.55779,26.46415,31.61723s27.42027,28.603,30.47831,32.55875,12.0425,2.82459,10.13026,8.85313-4.766,16.07125-7.7511,17.11492-17.01278-.75185-18.04186-2.737-66.57662-39.03273-89.96813-65.69426l-22.262-15.11-.33393-25.56466Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#7168fc"
                />
                <path
                  d="M733.228,287.14939l30.60963,41.55779,26.46415,31.61723s27.42027,28.603,30.47831,32.55875,12.0425,2.82459,10.13026,8.85313-4.766,16.07125-7.7511,17.11492-17.01278-.75185-18.04186-2.737-66.57662-39.03273-89.96813-65.69426l-22.262-15.11-.33393-25.56466Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ff6584"
                />
                <path
                  d="M733.228,287.14939l30.60963,41.55779,26.46415,31.61723s27.42027,28.603,30.47831,32.55875,12.0425,2.82459,10.13026,8.85313-4.766,16.07125-7.7511,17.11492-17.01278-.75185-18.04186-2.737-66.57662-39.03273-89.96813-65.69426l-22.262-15.11-.33393-25.56466Z"
                  transform="translate(-144.8873 -49.1386)"
                  opacity="0.1"
                />
                <path
                  d="M745.8873,267.8614l6.36377,15h5.63623l-8-38c0-24.39075-11.77246-45-36.16333-45h-.00025A30.83661,30.83661,0,0,0,682.8873,230.698v37.26782a14.89557,14.89557,0,0,0,14.8955,14.89563h43.7295Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M642.3873,651.3614s-9,12-9,15-5,4-8,7-6,2-4,5-25,21-25,21l-26,34,7,6,20-21-3,37,28,26s12,2,13,0-10-22-10-22,1-18,7-25a102.02946,102.02946,0,0,0,10-14s-3-4,4-5,2-7,2-7,2-1,8-1,33-29,33-29Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M754.3873,682.3614s-4,14,3,22,0,6,0,6,1,6-3,9-4,9-4,9-5,10-4,16,1,36,1,36h10v-26l20,26h50s-1-5-6-6-20,0-23-21c0,0-1-12-3-14s-4-9-2-14,0-7,3-9,4-8,2-11-8-8-1-11,7-18,7-18Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M688.3873,442.3614s-11,9,3,46,20,85,20,85-14,12-14,18-62,44-58,61,77,49,84,47,41-98,41-98-13-106-14-107-31-50-31-50l-18-37Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M688.3873,442.3614s-11,9,3,46,20,85,20,85-14,12-14,18-62,44-58,61,77,49,84,47,41-98,41-98-13-106-14-107-31-50-31-50l-18-37Z"
                  transform="translate(-144.8873 -49.1386)"
                  opacity="0.1"
                />
                <path
                  d="M687.3873,419.3614s-8,29,11,59,41,92,41,92,21,65,12,112c0,0-3,6,5,6s92-2,85-23-38-119-38-119l-40-99-2-30-15-23h-31Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M547.49616,449.3614s-30.24936,0-23.67342,9,31.56456,8,31.56456,8Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ffb9b9"
                />
                <path
                  d="M705.8873,242.8614s2,14-5,16,28,17,28,17,7-24,10-27S705.8873,242.8614,705.8873,242.8614Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ffb9b9"
                />
                <path
                  d="M705.8873,242.8614s2,14-5,16,28,17,28,17,7-24,10-27S705.8873,242.8614,705.8873,242.8614Z"
                  transform="translate(-144.8873 -49.1386)"
                  opacity="0.1"
                />
                <path
                  d="M733.8873,265.8614s-31-9-32-12-8,4-11,9-9,11-12,11-25,13-30,36c-2.28888,10.52884-5.62556,16.65695-8.57106,20.207a19.29176,19.29176,0,0,0-3.88265,10.00131.97368.97368,0,0,1-.54629.79167c-2,1,42,43,42,43s17-4,20,0-2,11-5,15-10,24-6,27,25-27,37-21,24,1,24,1,5,16,13,16,10-13,7-17-15-12-9-23,8-31,8-31,16-19-13-42c0,0-10-28-13-30s-8-3-8-5S733.8873,265.8614,733.8873,265.8614Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ff6584"
                />
                <path
                  d="M638.8873,335.8614l-30,42-26,32s-27,29-30,33-12,3-10,9,5,16,8,17,17-1,18-3,66-40,89-67l22.03912-15.43319-.03912-25.56681Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#ff6584"
                />
                <path
                  d="M699.47936,384.93877l57.96608,1.84974a2.517,2.517,0,0,1,2.44186,2.51584v.92487a2.517,2.517,0,0,1-2.62955,2.51444l-57.96608-2.7746a2.517,2.517,0,0,1-2.40437-2.51444h0A2.517,2.517,0,0,1,699.47936,384.93877Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <ellipse cx="614" cy="341.2228" rx="1" ry="5.5" fill="#2f2e41" />
                <circle cx="581" cy="181.7228" r="28" fill="#ffb9b9" />
                <path
                  d="M737.59018,201.19862c-5.4253-1.37519-18.28907-1.33722-20.17139-1.33722a34.53142,34.53142,0,0,0-34.53149,34.53143l-13,48.46857h25.3042l4.6958-18,6.66674,18h12.73829l1.095-10.81653,4.31128,10.81653H738.8873c-10.62647-24.04407-16.2793-45.96063-2.31812-59.48786,9.42749,1.28412,17.37866-1.241,18.67432-6.35223C756.73617,211.13239,748.83261,204.04835,737.59018,201.19862Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M736.68257,277.72205"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#2f2e41"
                />
                <path
                  d="M177.7873,372.4614a14.01224,14.01224,0,0,1-12.2-21c17.8-30,71.9-100.1,190.1-100.1,51.2,0,96.1,13.6,133.4,40.4,30.7,22,47.9,46.9,56.1,58.9a13.89683,13.89683,0,0,1-3.7,19.4,14.2241,14.2241,0,0,1-19.6-3.7c-14.9-21.6-60.1-87.2-166.2-87.2-103.6,0-150.4,60.4-165.7,86.3a13.80376,13.80376,0,0,1-12.2,7Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#7168fc"
                />
                <path
                  d="M415.1873,646.8614a13.93427,13.93427,0,0,1-3.5-.4c-85.7-21.5-117.7-108.1-119-111.7l-.2-.8c-.7-2.5-17.9-61.9,8.5-96.7,12.1-15.9,30.5-24,54.8-24,22.6,0,38.9,7.1,50.1,21.8,9.2,12,12.9,26.8,16.5,41.1,7.5,29.7,12.9,45.3,44.1,46.9,13.7.7,22.7-7.4,27.8-14.3,13.8-18.8,16.2-49.5,5.8-76.5-13.4-35-60.8-100.9-144.4-100.9-35.7,0-68.5,11.6-94.8,33.4-21.8,18.1-39.1,43.6-47.4,69.8-15.4,48.8,4.8,125.5,5,126.2a13.8707,13.8707,0,0,1-10,17,14.20244,14.20244,0,0,1-17.3-9.9c-.9-3.5-22.5-85.3-4.7-141.7,19.4-61.10005,79.2-122.7,169.2-122.7,41.6,0,80.9,14.3,113.7,41.3,25.4,21,46.2,49.2,57,77.4,13.8,36,10.1,76.4-9.4,102.8-13,17.6-31.5,26.8-52,25.8-53.4-2.7-63-40.4-70-67.9-7.2-28.2-11.8-41.8-39.3-41.8-15.1,0-25.7,4.2-32.3,12.9-9,11.9-9.7,30.5-8.7,44q.015.2115.0306.42218a113.92745,113.92745,0,0,0,15.21027,48.70181c13.88212,23.93614,42.04092,60.64529,88.75913,72.376a13.89141,13.89141,0,0,1,10.2,16.9,14.19649,14.19649,0,0,1-13.7,10.5Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#7168fc"
                />
                <path
                  d="M305.1873,640.4614a14.23792,14.23792,0,0,1-10.3-4.4c-34.3-36.4-53.7-77.1-61-128v-.3c-4.1-33.7,1.9-81.4,31.3-114.2,21.7-24.2,52.2-36.5,90.5-36.5,45.3,0,80.9,21.3,103.1,61.5a172.86688,172.86688,0,0,1,19.4,59.5,14.126,14.126,0,0,1-28.1,2.9,144.75414,144.75414,0,0,0-16.5-49.7c-17.2-30.7-43.4-46.3-78-46.3-29.9,0-53.3,9.1-69.4,27.1-23.2,25.9-27.7,65.8-24.5,92.2,6.4,45,23.5,80.8,53.7,112.8a13.83125,13.83125,0,0,1-.7,19.7,14.18492,14.18492,0,0,1-9.5,3.7Z"
                  transform="translate(-144.8873 -49.1386)"
                  fill="#7168fc"
                />
                <circle cx="211" cy="442.7228" r="18" fill="#7168fc" />
              </svg>
            </div>
          </div>
        </div>
      </div>
  </div>
  
@endsection