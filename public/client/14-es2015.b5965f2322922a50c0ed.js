(window.webpackJsonp=window.webpackJsonp||[]).push([[14],{UZ5K:function(t,e,i){"use strict";i.r(e),i.d(e,"StaffsModule",function(){return N});var r=i("ofXK"),o=i("fXoL"),n=i("jhN1"),b=i("tk/3");let a=(()=>{class t{constructor(t){this.http=t}getStaff(t){return this.http.get("staffs/"+t)}getList(){return this.http.get("staffs/")}addStaff(t){return this.http.post("staffs/create",t)}updateStaff(t,e){return this.http.put("staffs/"+t,e)}deleteStaff(t){return this.http.delete("staffs/"+t)}}return t.\u0275fac=function(e){return new(e||t)(o.Sb(b.b))},t.\u0275prov=o.Fb({token:t,factory:t.\u0275fac,providedIn:"root"}),t})();var c=i("3Pt+"),s=i("tyNb");function l(t,e){1&t&&(o.Ob(0,"div"),o.uc(1,"L\xe1i xe"),o.Nb())}function d(t,e){1&t&&(o.Ob(0,"div"),o.uc(1,"Ki\u1ec3m so\xe1t v\xe9"),o.Nb())}function f(t,e){1&t&&(o.Ob(0,"div"),o.uc(1,"\u0110i\u1ec1u h\xe0nh vi\xean"),o.Nb())}function m(t,e){1&t&&(o.Ob(0,"div"),o.uc(1,"Admin"),o.Nb())}function u(t,e){1&t&&(o.Ob(0,"div"),o.uc(1,"Ch\u01b0a thi\u1ebft l\u1eadp"),o.Nb())}function h(t,e){if(1&t&&(o.Ob(0,"tr",18),o.Ob(1,"td",19),o.uc(2),o.Nb(),o.Ob(3,"td",16),o.uc(4),o.Nb(),o.Ob(5,"td",16),o.Ob(6,"div",20),o.sc(7,l,2,0,"div",21),o.sc(8,d,2,0,"div",21),o.sc(9,f,2,0,"div",21),o.sc(10,m,2,0,"div",21),o.sc(11,u,2,0,"div",22),o.Nb(),o.Nb(),o.Ob(12,"td",16),o.Ob(13,"a",23),o.Kb(14,"i",24),o.Nb(),o.Ob(15,"a",25),o.Kb(16,"i",26),o.Nb(),o.Ob(17,"a",27),o.Kb(18,"i",28),o.Nb(),o.Nb(),o.Nb()),2&t){const t=e.$implicit,i=e.index;o.zb(2),o.vc(i+1),o.zb(2),o.vc(t.name),o.zb(2),o.fc("ngSwitch",t.role_code),o.zb(1),o.fc("ngSwitchCase",1),o.zb(1),o.fc("ngSwitchCase",2),o.zb(1),o.fc("ngSwitchCase",3),o.zb(1),o.fc("ngSwitchCase",4),o.zb(3),o.hc("routerLink","./details/",t.id,""),o.zb(2),o.hc("routerLink","./edit/",t.id,""),o.zb(2),o.hc("routerLink","./delete/",t.id,"")}}const p=[{path:"",component:(()=>{class t{constructor(t,e){this.titleService=t,this.staffService=e,this.staffs=[],this.titleService.setTitle("Danh s\xe1ch nh\xe2n vi\xean")}ngOnInit(){this.loadStaff()}loadStaff(){this.staffService.getList().subscribe(t=>this.staffs=t)}}return t.\u0275fac=function(e){return new(e||t)(o.Jb(n.b),o.Jb(a))},t.\u0275cmp=o.Db({type:t,selectors:[["app-list-staff"]],decls:29,vars:1,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-4"],[1,"app-search-box","col-md-6"],[1,"app-search-form"],["type","text","placeholder","Search...","name","search",1,"form-control","search-input",2,"height","40px"],["type","submit","value","Search",1,"btn","search-btn","btn-primary"],[1,"fas","fa-search"],[1,"ms-auto","col-md-2"],["routerLink","./create",1,"btn","btn-success"],[1,"app-card","shadow-sm","mb-4"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[1,"table","table-hover","table-borderless","table-sm","text-center","text-font"],[1,"thead-background"],[1,"align-middle"],["class","color",4,"ngFor","ngForOf"],[1,"color"],["scope","row",1,"align-middle"],[3,"ngSwitch"],[4,"ngSwitchCase"],[4,"ngSwitchDefault"],[1,"btn","btn-outline-primary",3,"routerLink"],[1,"fas","fa-info-circle"],[1,"btn","btn-outline-warning","m-2",3,"routerLink"],[1,"far","fa-edit"],[1,"btn","btn-outline-danger","m-2",3,"routerLink"],[1,"fas","fa-trash-alt"]],template:function(t,e){1&t&&(o.Ob(0,"div",0),o.Ob(1,"h1",1),o.uc(2,"Danh s\xe1ch nh\xe2n vi\xean"),o.Nb(),o.Ob(3,"div",2),o.Ob(4,"form",3),o.Kb(5,"input",4),o.Ob(6,"button",5),o.Kb(7,"i",6),o.Nb(),o.Nb(),o.Nb(),o.Ob(8,"div",7),o.Ob(9,"a",8),o.uc(10,"Th\xeam nh\xe2n vi\xean"),o.Nb(),o.Nb(),o.Nb(),o.Ob(11,"div",9),o.Ob(12,"div",10),o.Ob(13,"div",11),o.Ob(14,"div",12),o.Ob(15,"div",13),o.Ob(16,"table",14),o.Ob(17,"thead",15),o.Ob(18,"tr"),o.Ob(19,"th",16),o.uc(20,"STT"),o.Nb(),o.Ob(21,"th",16),o.uc(22,"T\xean nh\xe2n vi\xean"),o.Nb(),o.Ob(23,"th",16),o.uc(24,"Ch\u1ee9c v\u1ee5"),o.Nb(),o.Ob(25,"th",16),o.uc(26,"T\xe1c v\u1ee5"),o.Nb(),o.Nb(),o.Nb(),o.Ob(27,"tbody"),o.sc(28,h,19,10,"tr",17),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb()),2&t&&(o.zb(28),o.fc("ngForOf",e.staffs))},directives:[c.v,c.k,s.d,r.k,r.m,r.n,r.o],styles:[""]}),t})()},{path:"create",component:(()=>{class t{constructor(t,e,i,r){this.staffService=t,this.formBuilder=e,this.title=i,this.router2=r,this.title.setTitle("Th\xeam m\u1edbi nh\xe2n vi\xean")}ngOnInit(){this.createStaffForm=this.formBuilder.group({name:["",c.t.required],gender:["1",c.t.required],birthday:[,c.t.required],identity_number:["1",c.t.required],role_code:["1",c.t.required],user_name:["",c.t.required],password:["",c.t.required]})}addStaff(){if(this.createStaffForm.invalid)return this.message="Vui l\xf2ng \u0111i\u1ec1n \u0111\u1ea7y \u0111\u1ee7 th\xf4ng tin",console.log(this.message);const{value:t}=this.createStaffForm;console.log(t),this.staffService.addStaff(t).subscribe(t=>{this.message="Th\xeam nh\xe2n vi\xean m\u1edbi th\xe0nh c\xf4ng",alert(this.message),this.router2.navigateByUrl("manager/staffs")},t=>{this.message="Th\xeam nh\xe2n vi\xean m\u1edbi kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i",console.log(this.message)})}}return t.\u0275fac=function(e){return new(e||t)(o.Jb(a),o.Jb(c.b),o.Jb(n.b),o.Jb(s.b))},t.\u0275cmp=o.Db({type:t,selectors:[["app-create-staff"]],decls:56,vars:1,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup","ngSubmit"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1","checked","",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday",1,"form-control","col-md-6"],["type","number","formControlName","identity_number",1,"form-control","col-md-6"],["formControlName","role_code",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name",1,"form-control","col-md-6"],["type","password","formControlName","password",1,"form-control","col-md-6"],["type","submit",1,"btn","btn-primary","m-2"],["routerLink","../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(o.Ob(0,"div",0),o.Ob(1,"h1",1),o.uc(2,"Th\xeam nh\xe2n vi\xean m\u1edbi"),o.Nb(),o.Nb(),o.Ob(3,"div",2),o.Ob(4,"div",3),o.Ob(5,"div",4),o.Ob(6,"div",5),o.Ob(7,"div",6),o.Ob(8,"form",7),o.Vb("ngSubmit",function(){return e.addStaff()}),o.Ob(9,"div",8),o.Ob(10,"label",9),o.uc(11,"T\xean nh\xe2n vi\xean "),o.Nb(),o.Kb(12,"input",10),o.Nb(),o.Ob(13,"div",8),o.Ob(14,"label",11),o.uc(15,"Gi\u1edbi t\xednh"),o.Nb(),o.Ob(16,"div",12),o.Kb(17,"input",13),o.Ob(18,"label",14),o.uc(19," Nam "),o.Nb(),o.Nb(),o.Ob(20,"div",12),o.Kb(21,"input",15),o.Ob(22,"label",16),o.uc(23," N\u1eef "),o.Nb(),o.Nb(),o.Nb(),o.Ob(24,"div",8),o.Ob(25,"label",17),o.uc(26,"Ng\xe0y sinh"),o.Nb(),o.Kb(27,"input",18),o.Nb(),o.Ob(28,"div",8),o.Ob(29,"label",17),o.uc(30,"S\u1ed1 CMND "),o.Nb(),o.Kb(31,"input",19),o.Nb(),o.Ob(32,"div",8),o.Ob(33,"label",17),o.uc(34,"Ch\u1ee9c v\u1ee5 "),o.Nb(),o.Ob(35,"select",20),o.Ob(36,"option",21),o.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),o.Nb(),o.Ob(38,"option",22),o.uc(39,"L\xe1i xe"),o.Nb(),o.Ob(40,"option",23),o.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),o.Nb(),o.Ob(42,"option",24),o.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),o.Nb(),o.Nb(),o.Nb(),o.Ob(44,"div",8),o.Ob(45,"label",17),o.uc(46,"T\xean t\xe0i kho\u1ea3n"),o.Nb(),o.Kb(47,"input",25),o.Nb(),o.Ob(48,"div",8),o.Ob(49,"label",17),o.uc(50,"M\u1eadt kh\u1ea9u"),o.Nb(),o.Kb(51,"input",26),o.Nb(),o.Ob(52,"button",27),o.uc(53,"Th\xeam nh\xe2n vi\xean m\u1edbi"),o.Nb(),o.Ob(54,"a",28),o.uc(55,"Tr\u1edf l\u1ea1i danh s\xe1ch"),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb()),2&t&&(o.zb(8),o.fc("formGroup",e.createStaffForm))},directives:[c.v,c.k,c.f,c.a,c.j,c.e,c.p,c.n,c.s,c.m,c.u,s.d],styles:[""]}),t})()},{path:"details/:id",component:(()=>{class t{constructor(t,e,i,r){this.titleService=t,this.router=e,this.staffService=i,this.formBuilder=r,this.titleService.setTitle("Chi ti\u1ebft nh\xe2n vi\xean")}ngOnInit(){const t=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(t).subscribe(t=>this.staff=t),this.initForm(),this.staffService.getStaff(t).subscribe(t=>this.pathStaffFormValue(t))}initForm(){this.detailsStaffForm=this.formBuilder.group({name:["",c.t.required],gender:["",c.t.required],birthday:["",c.t.required],identity_number:["",c.t.required],role_code:["",c.t.required],user_name:["",c.t.required],password:["",c.t.required]})}pathStaffFormValue(t){this.detailsStaffForm.patchValue({name:t.name,gender:t.gender,birthday:t.birthday,identity_number:t.identity_number,role_code:t.role_code,user_name:t.user_name,password:t.password})}}return t.\u0275fac=function(e){return new(e||t)(o.Jb(n.b),o.Jb(s.a),o.Jb(a),o.Jb(c.b))},t.\u0275cmp=o.Db({type:t,selectors:[["app-details-staff"]],decls:54,vars:2,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name","disabled","",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1","disabled","",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2","disabled","",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday","disabled","",1,"form-control","col-md-6"],["type","number","formControlName","identity_number","disabled","",1,"form-control","col-md-6"],["formControlName","role_code","disabled","",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name","disabled","",1,"form-control","col-md-6"],["type","password","formControlName","password","disabled","",1,"form-control","col-md-6"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(o.Ob(0,"div",0),o.Ob(1,"h1",1),o.uc(2),o.Nb(),o.Nb(),o.Ob(3,"div",2),o.Ob(4,"div",3),o.Ob(5,"div",4),o.Ob(6,"div",5),o.Ob(7,"div",6),o.Ob(8,"form",7),o.Ob(9,"div",8),o.Ob(10,"label",9),o.uc(11,"T\xean nh\xe2n vi\xean "),o.Nb(),o.Kb(12,"input",10),o.Nb(),o.Ob(13,"div",8),o.Ob(14,"label",11),o.uc(15,"Gi\u1edbi t\xednh"),o.Nb(),o.Ob(16,"div",12),o.Kb(17,"input",13),o.Ob(18,"label",14),o.uc(19," Nam "),o.Nb(),o.Nb(),o.Ob(20,"div",12),o.Kb(21,"input",15),o.Ob(22,"label",16),o.uc(23," N\u1eef "),o.Nb(),o.Nb(),o.Nb(),o.Ob(24,"div",8),o.Ob(25,"label",17),o.uc(26,"Ng\xe0y sinh"),o.Nb(),o.Kb(27,"input",18),o.Nb(),o.Ob(28,"div",8),o.Ob(29,"label",17),o.uc(30,"S\u1ed1 CMND "),o.Nb(),o.Kb(31,"input",19),o.Nb(),o.Ob(32,"div",8),o.Ob(33,"label",17),o.uc(34,"Ch\u1ee9c v\u1ee5 "),o.Nb(),o.Ob(35,"select",20),o.Ob(36,"option",21),o.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),o.Nb(),o.Ob(38,"option",22),o.uc(39,"L\xe1i xe"),o.Nb(),o.Ob(40,"option",23),o.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),o.Nb(),o.Ob(42,"option",24),o.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),o.Nb(),o.Nb(),o.Nb(),o.Ob(44,"div",8),o.Ob(45,"label",17),o.uc(46,"T\xean t\xe0i kho\u1ea3n"),o.Nb(),o.Kb(47,"input",25),o.Nb(),o.Ob(48,"div",8),o.Ob(49,"label",17),o.uc(50,"M\u1eadt kh\u1ea9u"),o.Nb(),o.Kb(51,"input",26),o.Nb(),o.Ob(52,"a",27),o.uc(53,"Tr\u1edf l\u1ea1i danh s\xe1ch"),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb()),2&t&&(o.zb(2),o.wc("Thay \u0111\u1ed5i th\xf4ng tin nh\xe2n vi\xean ",null==e.staff?null:e.staff.name,""),o.zb(6),o.fc("formGroup",e.detailsStaffForm))},directives:[c.v,c.k,c.f,c.a,c.j,c.e,c.p,c.n,c.s,c.m,c.u,s.d],styles:[""]}),t})()},{path:"edit/:id",component:(()=>{class t{constructor(t,e,i,r){this.titleService=t,this.staffService=e,this.router=i,this.formBuilder=r,this.titleService.setTitle("Ch\u1ec9nh s\u1eeda th\xf4ng tin nh\xe2n vi\xean")}ngOnInit(){const t=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(t).subscribe(t=>this.staff=t),this.initForm(),this.staffService.getStaff(t).subscribe(t=>this.pathStaffFormValue(t))}initForm(){this.editStaffForm=this.formBuilder.group({name:["",c.t.required],gender:["",c.t.required],birthday:["",c.t.required],identity_number:["",c.t.required],role_code:["",c.t.required],user_name:["",c.t.required],password:["",c.t.required]})}pathStaffFormValue(t){this.editStaffForm.patchValue({name:t.name,gender:t.gender,birthday:t.birthday,identity_number:t.identity_number,role_code:t.role_code,user_name:t.user_name,password:t.password})}updateStaff(){if(this.editStaffForm.invalid)return this.message="Vui l\xf2ng ki\u1ec3m tra l\u1ea1i th\xf4ng tin";const{value:t}=this.editStaffForm,e=this.router.snapshot.paramMap.get("id");this.staffService.updateStaff(e,t).subscribe(t=>{this.message="S\u1eeda th\xf4ng tin tr\u1ea1m th\xe0nh c\xf4ng",console.log(this.message)},t=>{this.message="S\u1eeda th\xf4ng tin tr\u1ea1m kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i!",console.log(this.message)})}}return t.\u0275fac=function(e){return new(e||t)(o.Jb(n.b),o.Jb(a),o.Jb(s.a),o.Jb(c.b))},t.\u0275cmp=o.Db({type:t,selectors:[["app-edit-staff"]],decls:56,vars:2,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup","ngSubmit"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday",1,"form-control","col-md-6"],["type","number","formControlName","identity_number",1,"form-control","col-md-6"],["formControlName","role_code",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name","disabled","",1,"form-control","col-md-6"],["type","password","formControlName","password",1,"form-control","col-md-6"],["type","submit",1,"btn","btn-primary","m-2"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(o.Ob(0,"div",0),o.Ob(1,"h1",1),o.uc(2),o.Nb(),o.Nb(),o.Ob(3,"div",2),o.Ob(4,"div",3),o.Ob(5,"div",4),o.Ob(6,"div",5),o.Ob(7,"div",6),o.Ob(8,"form",7),o.Vb("ngSubmit",function(){return e.updateStaff()}),o.Ob(9,"div",8),o.Ob(10,"label",9),o.uc(11,"T\xean nh\xe2n vi\xean "),o.Nb(),o.Kb(12,"input",10),o.Nb(),o.Ob(13,"div",8),o.Ob(14,"label",11),o.uc(15,"Gi\u1edbi t\xednh"),o.Nb(),o.Ob(16,"div",12),o.Kb(17,"input",13),o.Ob(18,"label",14),o.uc(19," Nam "),o.Nb(),o.Nb(),o.Ob(20,"div",12),o.Kb(21,"input",15),o.Ob(22,"label",16),o.uc(23," N\u1eef "),o.Nb(),o.Nb(),o.Nb(),o.Ob(24,"div",8),o.Ob(25,"label",17),o.uc(26,"Ng\xe0y sinh"),o.Nb(),o.Kb(27,"input",18),o.Nb(),o.Ob(28,"div",8),o.Ob(29,"label",17),o.uc(30,"S\u1ed1 CMND "),o.Nb(),o.Kb(31,"input",19),o.Nb(),o.Ob(32,"div",8),o.Ob(33,"label",17),o.uc(34,"Ch\u1ee9c v\u1ee5 "),o.Nb(),o.Ob(35,"select",20),o.Ob(36,"option",21),o.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),o.Nb(),o.Ob(38,"option",22),o.uc(39,"L\xe1i xe"),o.Nb(),o.Ob(40,"option",23),o.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),o.Nb(),o.Ob(42,"option",24),o.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),o.Nb(),o.Nb(),o.Nb(),o.Ob(44,"div",8),o.Ob(45,"label",17),o.uc(46,"T\xean t\xe0i kho\u1ea3n"),o.Nb(),o.Kb(47,"input",25),o.Nb(),o.Ob(48,"div",8),o.Ob(49,"label",17),o.uc(50,"M\u1eadt kh\u1ea9u"),o.Nb(),o.Kb(51,"input",26),o.Nb(),o.Ob(52,"button",27),o.uc(53,"L\u01b0u th\xf4ng tin"),o.Nb(),o.Ob(54,"a",28),o.uc(55,"Tr\u1edf l\u1ea1i danh s\xe1ch"),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb()),2&t&&(o.zb(2),o.wc("Thay \u0111\u1ed5i th\xf4ng tin nh\xe2n vi\xean ",null==e.staff?null:e.staff.name,""),o.zb(6),o.fc("formGroup",e.editStaffForm))},directives:[c.v,c.k,c.f,c.a,c.j,c.e,c.p,c.n,c.s,c.m,c.u,s.d],styles:[""]}),t})()},{path:"delete/:id",component:(()=>{class t{constructor(t,e,i,r){this.titleService=t,this.staffService=e,this.router=i,this.router2=r}ngOnInit(){const t=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(t).subscribe(t=>this.staff=t)}deleteStaff(t){this.staffService.deleteStaff(t).subscribe(t=>{this.message="X\xf3a tr\u1ea1m th\xe0nh c\xf4ng",console.log(this.message),this.router2.navigateByUrl("/manager/staffs")},t=>{this.message="X\xf3a tr\u1ea1m kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i",console.log(this.message)})}}return t.\u0275fac=function(e){return new(e||t)(o.Jb(n.b),o.Jb(a),o.Jb(s.a),o.Jb(s.b))},t.\u0275cmp=o.Db({type:t,selectors:[["app-delete-staff"]],decls:12,vars:1,consts:[[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],["href","javascript:;",1,"btn","btn-danger","m-2",3,"click"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(o.Ob(0,"div",0),o.Ob(1,"div",1),o.Ob(2,"div",2),o.Ob(3,"div",3),o.Ob(4,"div",4),o.Ob(5,"div",5),o.Ob(6,"h1",6),o.uc(7),o.Nb(),o.Nb(),o.Ob(8,"a",7),o.Vb("click",function(){return e.deleteStaff(e.staff.id)}),o.uc(9,"X\xf3a tr\u1ea1m"),o.Nb(),o.Ob(10,"a",8),o.uc(11,"Tr\u1edf l\u1ea1i danh s\xe1ch"),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb(),o.Nb()),2&t&&(o.zb(7),o.wc("X\xf3a ",null==e.staff?null:e.staff.name," ?"))},directives:[s.d],styles:[""]}),t})()}];let N=(()=>{class t{}return t.\u0275mod=o.Hb({type:t}),t.\u0275inj=o.Gb({factory:function(e){return new(e||t)},imports:[[r.c,s.e.forChild(p),c.q]]}),t})()}}]);