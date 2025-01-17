var getImage = document.getElementsByClassName('list-image')
getImage[2].className='img-fluid list-image p-3 li-active';
getImage[9].className='img-fluid list-image p-3 li-active';

var getMake = document.getElementById('make');
getMake.disabled = true;
getMake.style.backgroundColor='#909090';
function activeMake(){
    var getInput = document.getElementById('des');
    if (getInput.value == ""){
        getMake.disabled = true;
        getMake.style.backgroundColor='#909090'
    }
    else{
        getMake.disabled = false;
        getMake.style.backgroundColor='#F050AE'
    }
}

function makeCourse(){
    var getValue= document.getElementById('des').value;
    document.getElementById('first-des').classList.add('d-none');
    document.getElementById('first-course').classList.remove('d-none');
    document.getElementById('course-name').innerText = getValue;
}

var getName = document.getElementById('course-name');
var getEdite = document.getElementById('edite-course');
function editeName(){
    getName.classList.add('d-none');
    getEdite.classList.remove('d-none');
    getEdite.value = getName.innerHTML;
}
function changeVal(e){
    if (e.keyCode == 13){
        getEdite.classList.add('d-none');
        getName.classList.remove('d-none');
        getName.innerHTML = getEdite.value;
    }
}

var bLess = document.getElementById('m-lesson');
bLess.disabled = true;
bLess.style.backgroundColor='#909090';

var getLess = document.getElementById('first-lesson');
var getAdd = document.getElementById('btn-add');

function newLesson(){
    getLess.classList.remove('d-none');
    getAdd.classList.add('d-none')
}
function activeLess(){
    var getLInput = document.getElementById('des-m-less');
    if (getLInput.value == ""){
        bLess.disabled = true;
        bLess.style.backgroundColor='#909090'
    }
    else{
        bLess.disabled = false;
        bLess.style.backgroundColor='#F050AE'
    }
}

function editeLessName(){
    document.getElementById('edite-less').classList.remove('d-none')
    document.getElementById('less-name').classList.add('d-none');
    document.getElementById('p-d').style.padding = '21px';
    document.getElementById('edite-less').value = document.getElementById('less-name').innerHTML
}

function changeLessVal(e){
    if(e.keyCode == 13){
        document.getElementById('less-name').innerHTML = document.getElementById('edite-less').value
        document.getElementById('less-name').classList.remove('d-none');
        document.getElementById('p-d').style.padding = '11px';
        document.getElementById('edite-less').classList.add('d-none');
    }
}

var getMlesson = document.getElementById('m-f-less');
var num = 0;
function makeLesson(elm) {
    var getLValue = document.getElementById('des-m-less');
    document.getElementById('first-c-lesson').classList.remove('d-none');
    document.getElementById('less-name').innerText= getLValue.value;
    var getFLess = document.getElementById('f-lesson');
    var reLesson = document.createElement('div');
    var reScript = document.createElement('script');
    reLesson.className='row align-items-center';
    reLesson.style.marginBottom='32px';
    reLesson.id=`newElem${num}`;
    reLesson.innerHTML = `
                          <div class="col-md-10">
                                <label class="form-label"> عنوان درس ${num + 2}</label>
                                <input type="text" class="form-control" id="des-less-s${num}" onkeyup="activeCLess('des-less-s${num}','m-lesson-s${num}')">
                          </div>
                          <div class="col-md-2" style="margin-top: 30px">
                                 <div class="d-grid">
                                         <button class="btn" id="m-lesson-s${num}" style="height:44px ;color:#FDFEFF ;" onclick="makeCLesson('newElem${num}','des-less-s${num}')">
                                                <i class="fa-solid fa-plus font-14 me-2 vertical-td" style="font-weight: 400 !important;"></i>
                                                 ایجاد درس
                                         </button>
                                 </div>
                          </div>
             `;
    reScript.innerHTML=`
                   var getBtnL = document.getElementById('m-lesson-s${num}');
                   getBtnL.disabled = true;
                   getBtnL.style.backgroundColor='#A3A3A3';
                   function activeCLess(DLS,MLS){
                     var getDLS = document.getElementById(DLS).value;
                     var getMLS = document.getElementById(MLS);
                     if (getDLS == ""){
                        getMLS.disabled = true;
                        getMLS.style.backgroundColor='#909090'
                        }
                        else{
                         getMLS.disabled = false;
                         getMLS.style.backgroundColor='#F050AE'
                     }
                   };
                   function makeCLesson(elm,val){
                     var getElm = document.getElementById(elm);
                     getElm.classList.add('d-none');
                     makeLesson();
                     addPlace(val);
                   };
                   function addPlace(val){
                     var getValEm = val
                     var getPlace = document.getElementById('lesson-place');
                     var newPlace = document.createElement('div');
                     newPlace.className = 'row align-items-center mt-4';
                     newPlace.style.padding='0px 12px';
                     newPlace.innerHTML = \`
                                         <div class="col-md-9 less-col">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                            <p class="font-14 text-75 text-center vertical-td">درس ${num + 1}</p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="text-46" id="less-name${num}"></p>
                                                            <input type="text" id="edite-less${num}" onkeyup="changeCLessVal(event,this,'less-name${num}','p-d${num}')" class="form-control vertical-td d-none">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeCLessName('edite-less${num}','less-name${num}','p-d${num}')">
                                                        <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                                    </div>
                                                </div>
                                         </div>
                                         <div class="col-md-3 list-items border-start-0 add-less-btn vertical-td" id="p-d${num}">
                                                <div class="d-flex justify-content-center align-items-center vertical-td">
                                                    <p class="vertical-td">
                                                       <i class="fa-solid fa-plus me-2 font-14 vertical-td"></i>
                                                    بارگذاری محتوای جدید   
                                                    </p>
                                                </div>
                                         </div>
                     \`;
                     addScript = document.createElement('script');
                     addScript.innerHTML = \`
                         function editeCLessName(elm , txt , pd){
                            document.getElementById(elm).classList.remove('d-none')
                            document.getElementById(txt).classList.add('d-none');
                            document.getElementById(pd).style.padding = '21px';
                         }
                         function changeCLessVal(e,elm,txt,pd){
                            if(e.keyCode == 13){
                                document.getElementById(txt).innerHTML = elm.value
                                document.getElementById(txt).classList.remove('d-none');
                                document.getElementById(pd).style.padding = '11px';
                                elm.classList.add('d-none');
                            }
                         }
                     \`
                     getPlace.appendChild(newPlace);
                     getPlace.appendChild(addScript);
                     var getInputVs = document.getElementById(val).value
                     document.getElementById('less-name${num}').innerHTML = getInputVs;
                     document.getElementById('edite-less${num}').value = getInputVs;
                   };
            `;
    getFLess.classList.add('d-none');
    getMlesson.appendChild(reLesson);
    getMlesson.appendChild(reScript);
    num++;
}


var getMom = document.getElementById('course');
var index = 0;
function addCourse(){
    var newCourse = document.createElement('div');
    newCourse.id = `momDiv${index}`;
    newCourse.className = 'mt-5'
    newCourse.innerHTML=`
               <div style="margin-top: 32px">
                    <div class="row align-items-center" id="first-des${index}">
                           <div class="col-md-10">
                              <label class="form-label"> عنوان فصل ${index + 2}</label>
                                  <input type="text" class="form-control" id="des${index}" onkeyup="activeSMake('des${index}','make${index}')" placeholder="مبانی دیزاین">
                           </div>
                    <div class="col-md-2" style="margin-top: 30px">
                         <div class="d-grid">
                                 <button class="btn" id="make${index}" onclick="makeSCourse('des${index}','first-des${index}','first-course${index}','course-name${index}')" style="height:44px ;color:#FDFEFF ;">ایجاد فصل</button>
                         </div>
                    </div>
                  </div>
                          <div class="row mt-3 d-none" style="padding: 0px 12px" id="first-course${index}">
                                 <div class="col-12 des-col">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                <p class="font-14 text-75 text-center vertical-td">فصل ${index + 2}</p>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-46" id="course-name${index}">مبانی دیزاین</p>
                                                <input type="text" id="edite-course${index}" onkeyup="changeSval(event , 'course-name${index}','edite-course${index}')" class="form-control vertical-td d-none">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeSName('course-name${index}','edite-course${index}')">
                                            <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                        </div>
                                    </div>
                                </div>
                             <div style="margin-top: 32px" class="p-0">
                                 <div class="row align-items-center d-none" id="first-lesson${index}">
                                    <div class="col-12" id="m-f-less${index}">
                                      <div class="row align-items-center" id="f-lesson${index}">
                                        <div class="col-md-10">
                                            <label class="form-label"> عنوان درس اول</label>
                                            <input type="text" class="form-control" id="des-s-less-b${index}" onkeyup="activeSLess('des-s-less-b${index}','m-lesson${index}')" placeholder="مبانی دیزاین">
                                        </div>
                                        <div class="col-md-2" style="margin-top: 30px">
                                            <div class="d-grid">
                                                <button class="btn" id="m-lesson${index}" style="height:44px ;color:#FDFEFF ;" onclick="makeSLesson('f-lesson${index}','des-s-less-b${index}')">
                                                    <i class="fa-solid fa-plus font-14 me-2 vertical-td" style="font-weight: 400 !important;"></i>
                                                    ایجاد درس
                                                </button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                    <div class="d-flex p-0" id="btn-add${index}">
                                        <button class="btn px-3" onclick="newSLesson('first-lesson${index}','btn-add${index}')" style="color: #FDFEFF;background-color: #F050AE;height: 44px">ایجاد درس برای  این  فصل</button>
                                    </div>
                                </div>
                          </div>
           `;
    var newScript = document.createElement('script');
    newScript.innerHTML = `
       var getSMake = document.getElementById('make${index}');
       getSMake.disabled = true;
       getSMake.style.backgroundColor='#909090'
       function activeSMake(des , make){
            var getSInput = document.getElementById(des);
            var getSBtn = document.getElementById(make);
            if (getSInput.value == ""){
               getSBtn.disabled = true;
               getSBtn.style.backgroundColor='#909090'
            }
            else{
               getSBtn.disabled = false;
               getSBtn.style.backgroundColor='#F050AE'
            }
       }

       function makeSCourse(des , fDes , fCourse , name){
           var getSValue= document.getElementById(des).value;
           document.getElementById(fDes).classList.add('d-none');
           document.getElementById(fCourse).classList.remove('d-none');
           document.getElementById(name).innerText = getSValue;
       }

        function editeSName(name , edite){
           var getSName = document.getElementById(name);
           var getSEdite = document.getElementById(edite);
           getSName.classList.add('d-none');
           getSEdite.classList.remove('d-none');
           getSEdite.value = getSName.innerHTML;
        }
        function changeSval(e ,name , edite ){
           var getSName = document.getElementById(name);
           var getSEdite = document.getElementById(edite);
           if (e.keyCode == 13){
               getSEdite.classList.add('d-none');
               getSName.classList.remove('d-none');
               getSName.innerHTML = getSEdite.value;
           }
        }
        var sbLess = document.getElementById('m-lesson${index}');
        sbLess.disabled = true;
        sbLess.style.backgroundColor='#909090';
        function activeSLess(DL,Ml){
            var getSLInput = document.getElementById(DL);
            var gbLess = document.getElementById(Ml)
            if (getSLInput.value == ""){
                gbLess.disabled = true;
                gbLess.style.backgroundColor='#909090'
            }
            else{
                gbLess.disabled = false;
                gbLess.style.backgroundColor='#F050AE'
            }
        }
        function newSLesson(FL,BA){
            var getSLess = document.getElementById(FL);
            var getSAdd = document.getElementById(BA)
            getSLess.classList.remove('d-none');
            getSAdd.classList.add('d-none')
        }
       `;
    getMom.appendChild(newCourse);
    getMom.appendChild(newScript);
    index++;
}