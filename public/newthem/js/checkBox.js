//
// const Check = new Vue({
//     el: ".check-modal",
//     data() {
//         return {
//             checkArray: [
//                 {
//                     text: 'نوشتن اهداف اصلی', editeInput: '', check: '', classCheck: 'font-14 text-75',
//                     edite: false, styleCheck: 'display:inline', styleInput: 'display:none',
//                 },
//                 {
//                     text: 'تصاویر در توضیحات کامل شود', editeInput: '', check: false, classCheck: 'font-14 text-75',
//                     edite: false, styleCheck: 'display:inline', styleInput: 'display:none', checkboxInput: 'display:inline-block'
//                 }
//             ],
//             checkInput: '',
//         }
//     },
//     methods: {
//         addCheck() {
//             this.checkArray.push({ text: this.checkInput, editeInput: '', check: false, classCheck: 'font-14 text-75', edite: false, styleCheck: 'display:inline', styleInput: 'display:none', checkboxInput: 'display:inline-block' });
//         },
//         completeCheck(index) {
//             if (this.checkArray[index].check == false) {
//                 this.checkArray[index].check = true;
//                 this.checkArray[index].classCheck = 'font-14 text-75 text-decoration-line-through';
//             }
//             else if (this.checkArray[index].check == true) {
//                 this.checkArray[index].check = false;
//                 this.checkArray[index].classCheck = 'font-14 text-75';
//             }
//         },
//         removeCheck(index) {
//             this.checkArray.splice(index, 1)
//         },
//         editeCheck(index) {
//             if (this.checkArray[index].edite == false) {
//                 this.checkArray[index].edite = true;
//                 this.checkArray[index].styleInput = 'display:inline';
//                 this.checkArray[index].styleCheck = 'display:none';
//                 this.checkArray[index].checkboxInput = 'display:none';
//             }
//             else if (this.checkArray[index].edite == true) {
//                 this.checkArray[index].edite = false;
//                 this.checkArray[index].styleInput = 'display:none';
//                 this.checkArray[index].checkboxInput = 'display:inline-block';
//                 this.checkArray[index].styleCheck = 'display:inline';
//             }
//         },
//         completeEdite(index) {
//             if (this.checkArray[index].edite == true) {
//                 this.checkArray[index].text = this.checkArray[index].editeInput;
//                 this.checkArray[index].edite = false;
//                 this.checkArray[index].styleInput = 'display:none';
//                 this.checkArray[index].styleCheck = 'display:inline';
//                 this.checkArray[index].checkboxInput = 'display:inline-block';
//             }
//         }
//     },
// })
