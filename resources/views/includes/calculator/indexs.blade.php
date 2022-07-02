<!-- inputs name like "first table" is "firstt". And for colums "firstta", "firsttb" ... -->
<div class="d-block d-sm-none">
    <form method="GET" action="{{route('calculator')}}">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column bg-body rounded p-2">
                <div class="text-center mb-2"><span class="fs-3">РАСЧЕТ СУТОЧНОЙ ВАЛОВКИ</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-1">Какая урожайность, центнеров на 1 гектар (10 центнеров = 1000 кг = 1 тонна)?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="firstta" value="{{ !empty(session('firstta')) ? session('firstta') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Сколько гектар посевов этой культуры?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="firsttb" value="{{ !empty(session('firsttb')) ? session('firsttb') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Сколько времени идет уборка?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="firsttc" value="{{ !empty(session('firsttc')) ? session('firsttc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Итого валовка, тонн в сутки:</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_first_table']) ? $results['result_first_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ЗЕРНОСУШИЛКИ №1</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Какая культура?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <select name="secondta" value="{{ !empty(session('secondta')) ? session('secondta') : NULL}}" class="form-select" aria-label="Default select example">
                                    <option selected disabled value="">Культура</option>
                                    <option value="Фасоль">Фасоль</option>
                                    <option value="Горох">Горох</option>
                                    <option value="Пшеница">Пшеница</option>
                                    <option value="Кукуруза">Кукуруза</option>
                                    <option value="Рожь">Рожь</option>
                                    <option value="Ячмень">Ячмень</option>
                                    <option value="Рапс">Рапс</option>
                                    <option value="Лен">Лен</option>
                                    <option value="Рыжик">Рыжик</option>
                                    <option value="Подсолнечник">Подсолнечник</option>
                                    <option value="Гречиха">Гречиха</option>
                                    <option value="Овес">Овес</option>
                                    <option value="Чечевица">Чечевица</option>
                                    <option value="Рис">Рис</option>
                                    <option value="Вика">Вика</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Валовка, тонн в сутки?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="secondtb" value="{{ !empty(session('secondtb')) ? session('secondtb') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Время работы в сутки, часов (обычно 20-22)?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="secondtc" value="{{ !empty(session('secondtc')) ? session('secondtc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Входная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="secondtd" value="{{ !empty(session('secondtd')) ? session('secondtd') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Выходная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="secondte" value="{{ !empty(session('secondte')) ? session('secondte') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Необходимая производительность по указанной культуре, тонн в час:</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="secondtf" disabled value="{{ !empty(session('secondtf')) ? session('secondtf') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Необходимая производительность сушилки номинальная при снятии влажности с пшеницы с 20% до 14%, плановых тонн в час:</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_second_table']) ? $results['result_second_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ЗЕРНОСУШИЛКИ №2</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Какая культура?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <select name="thridta" value="{{ !empty(session('thridta')) ? session('thridta') : NULL}}" class="form-select" aria-label="Default select example">
                                    <option selected disabled value="">Культура</option>
                                    <option value="Фасоль">Фасоль</option>
                                    <option value="Горох">Горох</option>
                                    <option value="Пшеница">Пшеница</option>
                                    <option value="Кукуруза">Кукуруза</option>
                                    <option value="Рожь">Рожь</option>
                                    <option value="Ячмень">Ячмень</option>
                                    <option value="Рапс">Рапс</option>
                                    <option value="Лен">Лен</option>
                                    <option value="Рыжик">Рыжик</option>
                                    <option value="Подсолнечник">Подсолнечник</option>
                                    <option value="Гречиха">Гречиха</option>
                                    <option value="Овес">Овес</option>
                                    <option value="Чечевица">Чечевица</option>
                                    <option value="Рис">Рис</option>
                                    <option value="Вика">Вика</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Валовка, тонн в сутки?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="thridtb" value="{{ !empty(session('thridtb')) ? session('thridtb') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Время работы в сутки, часов (обычно 20-22)?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="thridtc" value="{{ !empty(session('thridtc')) ? session('thridtc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Входная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="thridtd" value="{{ !empty(session('thridtd')) ? session('thridtd') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Выходная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="thridte" value="{{ !empty(session('thridte')) ? session('thridte') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Необходимая производительность по указанной культуре, тонн в час:</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="thridtf" disabled value="{{ !empty(session('thridtf')) ? session('thridtf') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Необходимая производительность сушилки номинальная при снятии влажности с пшеницы с 20% до 14%, плановых тонн в час:</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_thrid_table']) ? $results['result_thrid_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">РАСЧЕТ ПРОИЗВОДИТЕЛЬНОСТИ ЗЕРНОСУШИЛКИ №3</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Какая культура?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <select name="fourthta" value="{{ !empty(session('fourthta')) ? session('fourthta') : NULL}}" class="form-select" aria-label="Default select example">
                                    <option selected disabled value="">Культура</option>
                                    <option value="Фасоль">Фасоль</option>
                                    <option value="Горох">Горох</option>
                                    <option value="Пшеница">Пшеница</option>
                                    <option value="Кукуруза">Кукуруза</option>
                                    <option value="Рожь">Рожь</option>
                                    <option value="Ячмень">Ячмень</option>
                                    <option value="Рапс">Рапс</option>
                                    <option value="Лен">Лен</option>
                                    <option value="Рыжик">Рыжик</option>
                                    <option value="Подсолнечник">Подсолнечник</option>
                                    <option value="Гречиха">Гречиха</option>
                                    <option value="Овес">Овес</option>
                                    <option value="Чечевица">Чечевица</option>
                                    <option value="Рис">Рис</option>
                                    <option value="Вика">Вика</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Валовка, тонн в сутки?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fourthtb" value="{{ !empty(session('fourthtb')) ? session('fourthtb') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Время работы в сутки, часов (обычно 20-22)?</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fourthtc" value="{{ !empty(session('fourthtc')) ? session('fourthtc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Входная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fourthtd" value="{{ !empty(session('fourthtd')) ? session('fourthtd') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Выходная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fourthte" value="{{ !empty(session('fourthte')) ? session('fourthte') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Необходимая производительность по указанной культуре, тонн в час:</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fourthtf" disabled value="{{ !empty(session('fourthtf')) ? session('fourthtf') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Необходимая производительность сушилки номинальная при снятии влажности с пшеницы с 20% до 14%, плановых тонн в час:</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_fourth_table']) ? $results['result_fourth_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">ПЕРЕСЧЕТ ФИЗИЧЕСКОЙ ПРОИЗВОДИТЕЛЬНОСТИ В НОМИНАЛЬНУЮ</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Указанные показатели оп пшенице:</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fifthta" placeholder="НЕЗАПОЛНЯЕМЫЙ ПОКАЗАТЕЛЬ" type="number" disabled class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Входная влажность, % (обычно 20%)</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fifthtb" value="{{ !empty(session('fifthtb')) ? session('fifthtb') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Выходная влажность, % (обычно 20%)</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fifthtc" value="{{ !empty(session('fifthtc')) ? session('fifthtc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Производительность физическая, в час</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="fifthtd" value="{{ !empty(session('fifthtd')) ? session('fifthtd') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Производительность НОМИНАЛЬНАЯ, при снятии влажности с пшеницы с 20% до 14%, плановых тонн в час</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_fifth_table']) ? $results['result_fifth_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column bg-body rounded p-1 mt-3">
                <div class="text-center mb-2"><span class="fs-3">РАССЧЕТ ФИЗИЧЕСКОЙ ПРОИЗВОДИТЕЛЬНОСТИ НА РАЗНЫХ КУЛЬТУРАХ</span></div>
                <div class="d-flex rounded bg-light p-3 shadow-sm">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Производительность НОМИНАЛЬНАЯ</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="sixta" value="{{ !empty(session('sixta')) ? session('sixta') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Культура</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <select name="sixtb" value="{{ !empty(session('sixtb')) ? session('sixtb') : NULL}}" class="form-select mt-2" aria-label="Default select example">
                                    <option selected disabled>Культура</option>
                                    <option value="Фасоль">Фасоль</option>
                                    <option value="Горох">Горох</option>
                                    <option value="Пшеница">Пшеница</option>
                                    <option value="Кукуруза">Кукуруза</option>
                                    <option value="Рожь">Рожь</option>
                                    <option value="Ячмень">Ячмень</option>
                                    <option value="Рапс">Рапс</option>
                                    <option value="Лен">Лен</option>
                                    <option value="Рыжик">Рыжик</option>
                                    <option value="Подсолнечник">Подсолнечник</option>
                                    <option value="Гречиха">Гречиха</option>
                                    <option value="Овес">Овес</option>
                                    <option value="Чечевица">Чечевица</option>
                                    <option value="Рис">Рис</option>
                                    <option value="Вика">Вика</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Входная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="sixtc" value="{{ !empty(session('sixtc')) ? session('sixtc') : NULL}}" type="number" class="form-control"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <lable class="form-label mt-2">Выходная влажность, %</lable>
                            </div>
                            <div class="d-flex flex-row">
                                <input name="sixtd" value="{{ !empty(session('sixtd')) ? session('sixtd') : NULL}}" type="number" class="form-control mt-2"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-2 fs-5"><b>Производительность физическая по культуре, тонн в час</b></lable>
                            </div>
                            <div class="d-flex justify-content-center">
                                <lable class="form-label mt-1 text-center fs-3 text-success"><b>{{ !empty($results['result_six_table']) ? $results['result_six_table'] : 'ИТОГ' }}</b></lable>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <button class="w-100 btn btn-success shadow-sm" type="submit">РАССЧИТАТЬ</button>
        </div>
    </form>
    <div class="mb-5 mt-3">
        <form method="post" action="{{route('calculator.reset')}}">
            @csrf
            <button class="w-100 mt-2 btn btn-light shadow-sm" type="submit">СБРОСИТЬ</button>
        </form>
    </div>
</div>
