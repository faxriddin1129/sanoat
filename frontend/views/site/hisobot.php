<?php

$this->title = 'Xisobot Kalkulyator';

?>

<div class="container" style="margin-top: 50px; padding: 50px;">
    <div class="row pt-3 pb-5">
        <h3 class="text-uppercase text-center mb-2 text-primary">Mavjud korxona xavfsizligi tizimining xavfini baholash</h3>
        <div class="col-md-12">
            <p class="font-weight-bolder mt-3 text-capitalize text-center">
                Jadvalga yuzaga kelish ehtimoli koeffitsientini va tahlikadan 3 balli shkala bo'yicha zarar koeffitsientini qo'ying. Ushbu tarkibiy qismlarning mahsuloti xavfni aniqlaydi. Xavfning umumiy miqdorini hisoblang. Olingan ma'lumotlar asosida xavfning uchta turini ajratish mumkin: past ( 2  ), o'rta ( 4 ), yuqori ( 6 ). Toifalar bo'yicha xavflarni baholash jadvalini tuzing.
            </p>
        </div>
        <div class="col-md-12">
            <table class="table-bordered table">
                <tr class="bg-dark">
                    <th class="text-center text-white">Tahdid nomi</th>
                    <th class="text-center text-white">Vujudga kelish ehtimoli</th>
                    <th class="text-center text-white">Zarar ko'rish miqdori</th>
                    <th class="text-center text-white">Natija</th>
                </tr>
                <tr>
                    <th>Tabiiy va suniy xavflar.</th>
                    <td>
                        <select id="t_1_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_1_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_1_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Tasodifiy foydalanuvchi </th>
                    <td>
                        <select id="t_2_1"  class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_2_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_2_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Tarmoqdagi xavflar</th>
                    <td>
                        <select id="t_3_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_3_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_3_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Dastur o’rnatish orqali xavf</th>
                    <td>
                        <select id="t_4_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_4_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_4_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Foydalanuvchi befarqligi</th>
                    <td>
                        <select id="t_5_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_5_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_5_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Ma’lumotlar bazasidagi xavflar</th>
                    <td>
                        <select id="t_6_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_6_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_6_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Signallar orqali xavflar</th>
                    <td>
                        <select id="t_7_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_7_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_7_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <th>Xodimlar orqali vujudga keladigan xavflar</th>
                    <td>
                        <select id="t_8_1" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select id="t_8_2" class="form-control">
                            <option value="0">Tanlang</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td id="t_8_3" class="text-center">0%</td>
                </tr>
                <tr>
                    <td data-toggle="modal" data-target="#myModal" onclick="myFunction()" id="resButton" colspan="4"><p class="text-center"><button class="btn btn-primary text-white mt-2">Tekshirish</button></p></td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bolder" colspan="2">Umumiy Natija</td>
                    <td colspan="2" id="res" class="text-center font-weight-bolder">0%</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="container">

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h6 class="modal-title" style="text-align: center">KORXONA XAVFSIZLIGI TIZIMINING XAVFI</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p id="modalRes" class="text-center text-primary h4 font-weight-bolder">0</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Yopish</button>
                </div>

            </div>
        </div>
    </div>

</div>


<script>

    const t_1_1 = document.getElementById('t_1_1')
    const t_1_2 = document.getElementById('t_1_2')
    const t_1_3 = document.getElementById('t_1_3')

    const t_2_1 = document.getElementById('t_2_1')
    const t_2_2 = document.getElementById('t_2_2')
    const t_2_3 = document.getElementById('t_2_3')

    const t_3_1 = document.getElementById('t_3_1')
    const t_3_2 = document.getElementById('t_3_2')
    const t_3_3 = document.getElementById('t_3_3')

    const t_4_1 = document.getElementById('t_4_1')
    const t_4_2 = document.getElementById('t_4_2')
    const t_4_3 = document.getElementById('t_4_3')

    const t_5_1 = document.getElementById('t_5_1')
    const t_5_2 = document.getElementById('t_5_2')
    const t_5_3 = document.getElementById('t_5_3')

    const t_6_1 = document.getElementById('t_6_1')
    const t_6_2 = document.getElementById('t_6_2')
    const t_6_3 = document.getElementById('t_6_3')

    const t_7_1 = document.getElementById('t_7_1')
    const t_7_2 = document.getElementById('t_7_2')
    const t_7_3 = document.getElementById('t_7_3')

    const t_8_1 = document.getElementById('t_8_1')
    const t_8_2 = document.getElementById('t_8_2')
    const t_8_3 = document.getElementById('t_8_3')

    const resButton = document.getElementById('resButton')
    const res = document.getElementById('res')
    const modalRes = document.getElementById('modalRes')

    function myFunction(){
        let i = 0
        t_1_3.innerHTML = Math.round(( (Number(t_1_1.value) + Number(t_1_2.value)) * 100 ) / 6) + " %"
        let A1T = Math.round(( (Number(t_1_1.value) + Number(t_1_2.value)) * 100 ) / 6)
        if (A1T !== 0 ){
            i++
        }

        t_2_3.innerHTML = Math.round(( (Number(t_2_1.value) + Number(t_2_2.value)) * 100 ) / 6) + " %"
        let A2T = Math.round(( (Number(t_2_1.value) + Number(t_2_2.value)) * 100 ) / 6)
        if (A2T !== 0 ){
            i++
        }

        t_3_3.innerHTML = Math.round(( (Number(t_3_1.value) + Number(t_3_2.value)) * 100 ) / 6) + " %"
        let A3T = Math.round(( (Number(t_3_1.value) + Number(t_3_2.value)) * 100 ) / 6)
        if (A3T !== 0 ){
            i++
        }

        t_4_3.innerHTML = Math.round(( (Number(t_4_1.value) + Number(t_4_2.value)) * 100 ) / 6) + " %"
        let A4T = Math.round(( (Number(t_4_1.value) + Number(t_4_2.value)) * 100 ) / 6)
        if (A4T !== 0 ){
            i++
        }

        t_5_3.innerHTML = Math.round(( (Number(t_5_1.value) + Number(t_5_2.value)) * 100 ) / 6) + " %"
        let A5T = Math.round(( (Number(t_5_1.value) + Number(t_5_2.value)) * 100 ) / 6)
        if (A5T !== 0 ){
            i++
        }

        t_6_3.innerHTML = Math.round(( (Number(t_6_1.value) + Number(t_6_2.value)) * 100 ) / 6) + " %"
        let A6T = Math.round(( (Number(t_6_1.value) + Number(t_6_2.value)) * 100 ) / 6)
        if (A6T !== 0 ){
            i++
        }

        t_7_3.innerHTML = Math.round(( (Number(t_7_1.value) + Number(t_7_2.value)) * 100 ) / 6) + " %"
        let A7T = Math.round(( (Number(t_7_1.value) + Number(t_7_2.value)) * 100 ) / 6)
        if (A7T !== 0 ){
            i++
        }

        t_8_3.innerHTML = Math.round(( (Number(t_8_1.value) + Number(t_8_2.value)) * 100 ) / 6) + " %"
        let A8T = Math.round(( (Number(t_8_1.value) + Number(t_8_2.value)) * 100 ) / 6)
        if (A8T !== 0 ){
            i++
        }

        res.innerHTML =  Math.round(( A1T + A2T +A3T + A4T + A5T + A6T +A7T +A8T) / i) + " ≈ %"
        modalRes.innerHTML =  Math.round(( A1T + A2T +A3T + A4T + A5T + A6T +A7T +A8T) / i) + " ≈ %"
    }

</script>















