<!-- inputs name like "first table" is "firstt". And for colums "firstta", "firsttb" ... -->
<div class="d-none d-sm-block">
    <div class="d-flex justify-content-between">
        <div><form method="post" action="{{ route('firstcalculator.reset') }}">@csrf<button class="btn btn-success shadow-sm">{{ __('К калькулятор сушка') }}</button></form></div>
        <div class="fs-3">
            <span>{{ __('КАЛЬКУЛЯТОР ОЧИСТКА') }}</span>
        </div>
    </div>
    <div class="border my-1"></div>
    <form method="GET" action="{{route('secondcalculator')}}">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column bg-body rounded p-2">
                <div class="text-center mb-2"><span class="fs-3">{{ __('РАСЧЕТ СУТОЧНОЙ ВАЛОВКИ') }}</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="col-8">
                        <div class="d-flex flex-column">
                            <lable class="form-label mt-2">{{ __('Какая урожайность, центнеров на 1 гектар (10 центнеров = 1000 кг = 1 тонна)?') }}</lable>
                            <lable class="form-label mt-2">{{ __('Сколько гектар посевов этой культуры?') }}</lable>
                            <lable class="form-label mt-2">{{ __('Сколько времени идет уборка?') }}</lable>
                            <lable class="form-label mt-3 fs-5"><b>{{ __('Итого валовка, тонн в сутки:') }}</b></lable>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <input name="firstta" value="{{ !empty(session('firstta')) ? session('firstta') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="firsttb" value="{{ !empty(session('firsttb')) ? session('firsttb') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="firsttc" value="{{ !empty(session('firsttc')) ? session('firsttc') : NULL}}" type="number" class="form-control mt-2"/>
                            <lable class="form-label mt-2 text-center fs-3 text-success"><b>{{ !empty($results['result_first_table']) ? $results['result_first_table'] : 'ИТОГ' }}</b></lable>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">{{ __('РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ОБОРУДОВАНИЯ №1') }}</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="col-8">
                        <div class="d-flex flex-column">
                            <lable class="form-label mt-3">{{ __('Какая культура?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Валовка, тонн в сутки?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Время работы в сутки, часов (обычно 8)?') }}</lable>
                            <lable class="form-label mt-2">{{ __('Объёмная масса культуры, тонн/м3') }}</lable>
                            <lable class="form-label mt-3">{{ __('Необходимая производительность по указанной культуре, тонн в час') }}</lable>
                            <lable class="form-label mt-2 fs-5"><b>{{ __('Необходимая производительность в пересчёте на пшеницу, т/ч') }}</b></lable>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <select name="secondta" value="{{ !empty(session('secondta')) ? session('secondta') : NULL}}" class="form-select" aria-label="Default select example">
                                <option selected disabled value="">{{ __('Культура') }}</option>
                                <option value="Фасоль">{{ __('Фасоль') }}</option>
                                <option value="Горох">{{ __('Горох') }}</option>
                                <option value="Пшеница">{{ __('Пшеница') }}</option>
                                <option value="Кукуруза">{{ __('Кукуруза') }}</option>
                                <option value="Рожь">{{ __('Рожь') }}</option>
                                <option value="Ячмень">{{ __('Ячмень') }}</option>
                                <option value="Рапс">{{ __('Рапс') }}</option>
                                <option value="Лен">{{ __('Лен') }}</option>
                                <option value="Рыжик">{{ __('Рыжик') }}</option>
                                <option value="Подсолнечник">{{ __('Подсолнечник') }}</option>
                                <option value="Гречиха">{{ __('Гречиха') }}</option>
                                <option value="Овес">{{ __('Овес') }}</option>
                                <option value="Чечевица">{{ __('Чечевица') }}</option>
                                <option value="Рис">{{ __('Рис') }}</option>
                                <option value="Вика">{{ __('Вика') }}</option>
                            </select>
                            <input name="secondtb" value="{{ !empty(session('secondtb')) ? session('secondtb') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="secondtc" value="{{ !empty(session('secondtc')) ? session('secondtc') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="secondtd" disabled value="{{ !empty(session('secondtd')) ? session('secondtd') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="secondte" disabled value="{{ !empty(session('secondte')) ? session('secondte') : NULL}}" type="number" class="form-control mt-2"/>
                            <lable class="form-label mt-3 text-center fs-3 text-success"><b>{{ !empty($results['result_second_table']) ? $results['result_second_table'] : 'ИТОГ' }}</b></lable>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">{{ __('РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ОБОРУДОВАНИЯ №2') }}</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="col-8">
                        <div class="d-flex flex-column">
                            <lable class="form-label mt-3">{{ __('Какая культура?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Валовка, тонн в сутки?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Время работы в сутки, часов (обычно 8)?') }}</lable>
                            <lable class="form-label mt-2">{{ __('Объёмная масса культуры, тонн/м3') }}</lable>
                            <lable class="form-label mt-3">{{ __('Необходимая производительность по указанной культуре, тонн в час') }}</lable>
                            <lable class="form-label mt-2 fs-5"><b>{{ __('Необходимая производительность в пересчёте на пшеницу, т/ч') }}</b></lable>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <select name="thridta" value="{{ !empty(session('thridta')) ? session('thridta') : NULL}}" class="form-select" aria-label="Default select example">
                                <option selected disabled value="">{{ __('Культура') }}</option>
                                <option value="Фасоль">{{ __('Фасоль') }}</option>
                                <option value="Горох">{{ __('Горох') }}</option>
                                <option value="Пшеница">{{ __('Пшеница') }}</option>
                                <option value="Кукуруза">{{ __('Кукуруза') }}</option>
                                <option value="Рожь">{{ __('Рожь') }}</option>
                                <option value="Ячмень">{{ __('Ячмень') }}</option>
                                <option value="Рапс">{{ __('Рапс') }}</option>
                                <option value="Лен">{{ __('Лен') }}</option>
                                <option value="Рыжик">{{ __('Рыжик') }}</option>
                                <option value="Подсолнечник">{{ __('Подсолнечник') }}</option>
                                <option value="Гречиха">{{ __('Гречиха') }}</option>
                                <option value="Овес">{{ __('Овес') }}</option>
                                <option value="Чечевица">{{ __('Чечевица') }}</option>
                                <option value="Рис">{{ __('Рис') }}</option>
                                <option value="Вика">{{ __('Вика') }}</option>
                            </select>
                            <input name="thridtb" value="{{ !empty(session('thridtb')) ? session('thridtb') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="thridtc" value="{{ !empty(session('thridtc')) ? session('thridtc') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="thridtd" disabled value="{{ !empty(session('thridtd')) ? session('thridtd') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="thridte" disabled value="{{ !empty(session('thridte')) ? session('thridte') : NULL}}" type="number" class="form-control mt-2"/>
                            <lable class="form-label mt-3 text-center fs-3 text-success"><b>{{ !empty($results['result_thrid_table']) ? $results['result_thrid_table'] : 'ИТОГ' }}</b></lable>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">{{ __('РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ОБОРУДОВАНИЯ №3') }}</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="col-8">
                        <div class="d-flex flex-column">
                            <lable class="form-label mt-3">{{ __('Какая культура?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Валовка, тонн в сутки?') }}</lable>
                            <lable class="form-label mt-3">{{ __('Время работы в сутки, часов (обычно 8)?') }}</lable>
                            <lable class="form-label mt-2">{{ __('Объёмная масса культуры, тонн/м3') }}</lable>
                            <lable class="form-label mt-3">{{ __('Необходимая производительность по указанной культуре, тонн в час') }}</lable>
                            <lable class="form-label mt-2 fs-5"><b>{{ __('Необходимая производительность в пересчёте на пшеницу, т/ч') }}</b></lable>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <select name="fourthta" value="{{ !empty(session('fourthta')) ? session('fourthta') : NULL}}" class="form-select" aria-label="Default select example">
                                <option selected disabled value="">{{ __('Культура') }}</option>
                                <option value="Фасоль">{{ __('Фасоль') }}</option>
                                <option value="Горох">{{ __('Горох') }}</option>
                                <option value="Пшеница">{{ __('Пшеница') }}</option>
                                <option value="Кукуруза">{{ __('Кукуруза') }}</option>
                                <option value="Рожь">{{ __('Рожь') }}</option>
                                <option value="Ячмень">{{ __('Ячмень') }}</option>
                                <option value="Рапс">{{ __('Рапс') }}</option>
                                <option value="Лен">{{ __('Лен') }}</option>
                                <option value="Рыжик">{{ __('Рыжик') }}</option>
                                <option value="Подсолнечник">{{ __('Подсолнечник') }}</option>
                                <option value="Гречиха">{{ __('Гречиха') }}</option>
                                <option value="Овес">{{ __('Овес') }}</option>
                                <option value="Чечевица">{{ __('Чечевица') }}</option>
                                <option value="Рис">{{ __('Рис') }}</option>
                                <option value="Вика">{{ __('Вика') }}</option>
                            </select>
                            <input name="fourthtb" value="{{ !empty(session('fourthtb')) ? session('fourthtb') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="fourthtc" value="{{ !empty(session('fourthtc')) ? session('fourthtc') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="fourthtd" disabled value="{{ !empty(session('fourthtd')) ? session('fourthtd') : NULL}}" type="number" class="form-control mt-2"/>
                            <input name="fourthte" disabled value="{{ !empty(session('fourthte')) ? session('fourthte') : NULL}}" type="number" class="form-control mt-2"/>
                            <lable class="form-label mt-3 text-center fs-3 text-success"><b>{{ !empty($results['result_fourth_table']) ? $results['result_fourth_table'] : 'ИТОГ' }}</b></lable>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <button class="w-100 btn btn-lg btn-success shadow-sm" type="submit">{{ __('РАССЧИТАТЬ') }}</button>
        </div>
    </form>
    <div class="mb-5 mt-2">
        <form method="post" action="{{route('secondcalculator.reset')}}">
            @csrf
            <button class="w-100 mt-2 btn btn-lg btn-light shadow-sm" type="submit">{{ __('СБРОСИТЬ') }}</button>
        </form>
    </div>
</div>
