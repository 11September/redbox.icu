<div class="section" id="form">
    <div class="wrapper-home" style="background-color: #3b3f45">
        <div class="wrapper-form">
            <div class="fs-form-wrap" id="fs-form-wrap">

                <div class="text-form">
                    <h2>@lang('messages.form.heading')</h2>
                </div>

                <form method="post" action="{{ action('WelcomeController@form') }}" id="myform"
                      class="fs-form fs-form-full" autocomplete="off">
                    {{ csrf_field() }}

                    <ol class="fs-fields">
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q1">@lang('messages.form.name')</label>
                            <input class="fs-anim-lower" id="q1" name="name" type="text"
                                   placeholder="Виталий Симоновский"
                                   required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q2"
                                   data-info="example@gmail.com">@lang('messages.form.email')</label>
                            <input class="fs-anim-lower" id="q2" name="email" type="email"
                                   placeholder="john@email.com"
                                   required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="g4"
                                   data-info="+380660563987">
                                @lang('messages.form.phone')
                            </label>
                            <input class="fs-anim-lower" id="g4" name="phone" type="text"
                                   placeholder="+380660563987"
                                   required/>
                        </li>
                    </ol>
                    <button class="fs-submit" type="submit">@lang('messages.form.submit')</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<script src="js/fullscreenForm.js"></script>
<script src="js/modernizr.custom.js"></script>

<script>
    (function () {
        var formWrap = document.getElementById('fs-form-wrap');

        [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
            new SelectFx(el, {
                stickyPlaceholder: false,
                onChange: function (val) {
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        });

        new FForm(formWrap, {
            onReview: function () {
                classie.add(document.body, 'overview'); // for demo purposes only
            }
        });
    })();
</script>