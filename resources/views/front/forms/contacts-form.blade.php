<form class="form form--contacts repeater" action="{{url('contacts')}}" method="post">
    <div class="row">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session()->has('status'))
        <div class="alert alert-success">
            <p>{{session('status')}}</p>
        </div>

        @endif

        {!! csrf_field() !!}

        <div class="form-group col-xs-12">
            <label for="location">@lang('app.form_location')</label>
            <div class="custom-select" onclick="openSelect(this)">
                <span class="icon icon--pin"></span>
                  <input type="text" name="location" value="{{old('location')}}" class="form-control" id="location" placeholder="@lang('app.form_location_placeholder')">
                {{--<select name="location" id="location" class="select-hide" value="{{old('location')}}">
                    <option value="null"></option>
                </select>
                <div class="select-selected">@lang('app.form_location_placeholder')</div>
                <div class="select-items select-hide" data-id="location">
                    <div onclick="clickElement(this)" value="Porto">Porto</div>
                    <div onclick="clickElement(this)" value="Braga">Braga</div>
                </div>--}}
            </div>
        </div>
        <div  id="clone-list">
            <div class="form-group col-xs-12" id="clone-input">
                <label for="service"><span class="service__number">1</span>º @lang('app.form_service')</label>
                <div class="form__add icon icon--plus"></div>
                <div class="custom-select" onclick="openSelect(this)">
                    <span class="icon icon--tool"></span>
                    <select name="service[]" class="select-hide" value="{{old('services[]')}}">
                        <option value="null"></option>
                    </select>
                    <div class="select-selected">@lang('app.form_service_placeholder')</div>
                    <div class="select-items select-hide">
                        @foreach ($services as $item)
                            <div onclick="clickElement(this)" value="{{$item->title}}">{{$item->title}}</div>
                        @endforeach
                        {{--<div onclick="clickElement(this)" value="Serviço XX">Serviço XX</div>
                        <div onclick="clickElement(this)" value="Serviço YY">Serviço YY</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label for="message">@lang('app.form_date')</label>
            <div class="custom-select">
                <span class="icon icon--calendar"></span>
                <input type="text" id="datepicker" name="date" value="{{old('date')}}"
                    placeholder="@lang('app.form_date_placeholder')">
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label for="message">@lang('app.form_message')</label>
            <textarea class="form-control" id="message" name="message" rows="10"
                placeholder="@lang('app.form_message_placeholder')">{{old('message')}}</textarea>
        </div>

        <!-- begin: info pessoal -->
        <hr class="col-xs-12">

        <div class="form-group col-xs-12 col-sm-6">
            <label for="name">@lang('app.form_name')*</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
        </div>
        <div class="form-group col-xs-12 col-sm-6">
            <label for="contact">@lang('app.form_company')*</label>
            <input type="text" name="company" value="{{old('company')}}" class="form-control" id="contact">
        </div>
        <div class="form-group col-xs-12 col-sm-6">
            <label for="email">@lang('app.form_email')*</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email">
        </div>
        <div class="form-group col-xs-12 col-sm-6">
            <label for="contact">@lang('app.form_contact')*</label>
            <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact">
        </div>
        <div class="col-xs-12">
            <span class="tip">*@lang('app.form_required_fields')</span>
        </div>
        <div class="form__footer col-xs-12 col-sm-8">
            @include('front.components.rgpd')
        </div>
        <div class="form__footer col-sm-4 col-xs-12">
            <button type="submit" name="button" class="btn"><span>@lang('app.btn_submit')</span></button>
        </div>

    </div>
</form>



@push('scripts')
<script>
    let inc = 1;

    $('.form__add').click(function() {
        var clone = $('#clone-input').clone();
        clone.find(".form__add").remove();
        inc=inc+1;
        clone.find(".service__number").text(inc)
        $('#clone-list').append(clone);
    });


    function clickElement(el){
        let dad = $(el).parent()[0].previousElementSibling;
        let value = $(el)[0].innerText;
        $(dad).text(value);
        $($(dad)[0].previousElementSibling).find("option").attr("value",value)
    }

   function openSelect(that) {
        $(that).find(".select-selected").toggleClass("select-arrow-active");
        $(that).find(".select-items").toggleClass("select-hide");
    }

    function selectElement(id, valueToSelect) {
        $('#' + id).find('option').attr('value', valueToSelect)
    }
</script>
@endpush