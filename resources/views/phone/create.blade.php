@component('layouts.content',['title'=>"پنل مدیریت"])
    @slot('slot')
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card">
                <div class="header">
                    <h2><strong> ایجاد شماره همراه</strong> جدید </h2>
                </div>
                <div class="body">
                    <form action="{{ route('phone.store') }}" method="post" id="form-phone">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">نام</label>
                            <input type="text" name="first_name" id="first_name" class="form-control"
                                   placeholder="نام خود را وارد کنید" value="{{ old('first_name') }}">
                            @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">نام خانوادگی</label>
                            <input type="text" name="last_name" id="last_name" class="form-control"
                                   placeholder="نام خانوادگی خود را وارد کنید" value="{{ old('last_name') }}">
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="father_name">نام پدر</label>
                            <input type="text" name="father_name" id="father_name" class="form-control"
                                   placeholder="نام پدر خود را وارد کنید" value="{{ old('father_name') }}">
                            @error('father_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_number">شماره تماس</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone_number"  class="form-control"
                                       value=""
                                       data-role="tagsinput"
                                       id="phone_number">
                            </div>
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="button" onclick="clickButton();"
                                class="btn btn-raised btn-primary btn-round waves-effect">ثبت
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function clickButton() {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('phone.store') }}',
                    data: $("#form-phone").serialize(),
                    success: function (response) {
                        window.location.href = "{{ route('phone.index') }}";
                    }
                });
            }
        </script>
    @endslot
    <h2></h2>
@endcomponent
