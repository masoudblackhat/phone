@component('layouts.content',['title'=>"پنل مدیریت"])
    @slot('slot')
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <p>سیستم ها</p>
                    <a href="{{route('phone.create')}}" class="btn btn-info">ایجاد شماره جدید</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>نام پدر</th>
                                <th>شماره تلفن ها</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(count($phones) == 0)
                                <strong>خطا</strong> تلفی برای نمایش وجود ندارد <a target="_blank" href="{{ route('phone.create') }}">ایجاد شماره همراه جدید</a>
                            @else
                                @foreach($phones as $key=>$phone)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{ $phone->first_name }}</td>
                                        <td>{{ $phone->last_name }}</td>
                                        <td>{{ $phone->father_name }}</td>
                                        <td>{{ $phone->phone_number }}</td>
                                        <td>
                                            <button class="btn btn-info"><strong>ویرایش</strong></button>
                                            <button class="btn btn-danger"><strong> حذف</strong></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endslot
    <h2>داشبورد</h2>
@endcomponent
