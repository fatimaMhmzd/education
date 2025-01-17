var getMother = document.getElementById('card-cost-mother');
var getPosition = document.getElementsByClassName('form-select');
var getCost = document.getElementsByClassName('cost-card');
var getSPosition = document.getElementById('user-s-position');
var getSCost = document.getElementsByClassName('cost-s-card');

var index = 1;

function addCost() {
    var newCost = document.createElement('div');
    var newScript = document.createElement('script');
    var changePro = document.createElement('script');
    var remove = document.createElement('script');
    newCost.innerHTML = `
    <div class="row mt-4" id="newCost">
        <div class="col-12">
            <div class="cost-s-card card mb-2" id="location${index}"  style="background-color: #A0E4261A">
              <div class="card-body">
                   <div class="row"><input name="id[]" value="0" hidden>
                                        <div class="col-md-2">
                                            <label for="" class="form-label">وضعیت هزینه</label>
                                            <select class="form-select cost-input-type" name="status[]" id="stat${index}"  onchange="getColor('stat${index}', 'location${index}')">
                                                <option value="ضروری">
                                                    ضروری
                                                </option>
                                                <option value="مکمل" selected>
                                                مکمل
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-md-0 mt-3">
                                            <label for="" class="form-label">مبلغ هزینه
                                                <span class="font-12">(تومان)</span>
                                            </label>
                                            <input type="text" name="value[]" value="0" id="price" class="form-control cost-input user-seccond-money prices"
                                                   placeholder="تومان">
                                        </div>
                                        <div class="col-md-4 mt-md-0 mt-3">
                                            <label for="" class="form-label">محل استفاده</label>
                                            <select class="form-select" name="type[]">
                                                <option value="اجرا">
                                                اجرا
                                                </option>
                                                <option value="زیرساخت">
                                                    زیرساخت
                                                </option>
                                                <option value="مواد اولیه">
                                                    مواد اولیه
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label for="" class="form-label">عنوان هزینه</label>
                                            <input type="text" name="title[]" class="form-control">                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label for="" class="form-label">شرح هزینه</label>
                                            <textarea type="text" name="description[]"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                        <button class="mt-3 btn btn-red" onclick="removeTag()">حذف هزینه</button>
                   </div>
                 </div>
             </div>
          </div>
`
    newScript.innerHTML=`
        function commaSeparateNumber(val) {

            if (val != "") {

                val = val.toString().replace(/,/g, ''); //remove existing commas first
                val = val.toString().replace(/تومان/g, ''); //remove existing commas first
                var valRZ = val.replace(/^0+/, ''); //remove leading zeros, optional
                var valSplit = valRZ.split('.'); //then separate decimals
                while (/(\\d+)(\\d{3})/.test(valSplit[0].toString())) {
                    valSplit[0] = valSplit[0].toString().replace(/(\\d+)(\\d{3})/, '$1' + ',' + '$2');
                }
                if (valSplit.length == 2) { //if there were decimals
                    val = valSplit[0] + "." + valSplit[1]; //add decimals back
                } else {
                    val = valSplit[0];
                }
                return val /*+ 'تومان'*/;
            }
            return "";
        }
        $(document).ready(function () {
            $('.prices').each(function () {

                $(this).on('input', function () {
                    var pattern = /^[0-9,]*$/g;

                    if($(this).val().match(pattern)){

                        $(this).bind('keypress',function(e){
                            var regex = new RegExp("^[0-9,]+$");
                            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                            if (regex.test(str)) return true;
                            e.preventDefault();
                            return false;
                        });

                        $(this).val(commaSeparateNumber($(this).val()));
                    }

                });

                //$(this).html(commaSeparateNumber($(this).html()));
            });
        });
    `;
    changePro.innerHTML=`
         function calculateValues() {
            var neccessaryValue = 0;
            var optionalValue = 0;
            var inputs = $(".cost-input");
            console.log(inputs)
            for (var i = 0; i < inputs.length; i++) {
                if ($(inputs[i]).parent().parent().find('.cost-input-type').val() == "ضروری") {
                    var a = $(inputs[i]).val();
                    a = a.replace(/\\,/g, ''); // 1125, but a string, so convert it to number
                    a = parseInt(a, 10);
                    neccessaryValue += a;
                } else if ($(inputs[i]).parent().parent().find('.cost-input-type').val() == "مکمل") {
                    var a = $(inputs[i]).val();
                    a = a.replace(/\\,/g, ''); // 1125, but a string, so convert it to number
                    a = parseInt(a, 10);
                    optionalValue += a;
                }
            }
            var neccessaryValuePercent = neccessaryValue / (neccessaryValue + optionalValue);
            var optionalValuePercent = optionalValue / (neccessaryValue + optionalValue);

            document.getElementById("progress-seccond-text").innerText = optionalValue;
            document.getElementById("progress-text").innerText = neccessaryValue;
            document.getElementById("result").innerText = neccessaryValue + optionalValue;


            document.getElementById("neccessaryProgress").style.flex = neccessaryValuePercent ;
            document.getElementById("optionalProgress").style.flex =optionalValuePercent ;
        }
        
        calculateValues();

        $( ".cost-input" ).keyup(function() {
            calculateValues();
        });

        $( ".cost-input-type" ).change(function() {
            calculateValues();
        });
    `
    remove.innerHTML=`
     function removeTag(){
     var getNewElement = document.getElementById('newCost');
     getNewElement.parentNode.removeChild(getNewElement);
     }
    `;
    getMother.appendChild(newCost)
    getMother.appendChild(newScript);
    getMother.appendChild(changePro)
    getMother.appendChild(remove);
    index++;
}

for (var i = 0; i < getCost.length; i++){
    getCost[i].style.backgroundColor = '#F050AE1A';
}

for (var j =0 ; j <getSCost.length; j++){
    getSCost[j].style.backgroundColor='#A0E4261A';
}