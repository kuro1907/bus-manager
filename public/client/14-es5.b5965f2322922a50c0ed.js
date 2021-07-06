!function(){function t(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function e(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function n(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}(window.webpackJsonp=window.webpackJsonp||[]).push([[14],{UZ5K:function(e,i,r){"use strict";r.r(i),r.d(i,"StaffsModule",function(){return C});var o,a=r("ofXK"),b=r("fXoL"),c=r("jhN1"),l=r("tk/3"),f=((o=function(){function e(n){t(this,e),this.http=n}return n(e,[{key:"getStaff",value:function(t){return this.http.get("staffs/"+t)}},{key:"getList",value:function(){return this.http.get("staffs/")}},{key:"addStaff",value:function(t){return this.http.post("staffs/create",t)}},{key:"updateStaff",value:function(t,e){return this.http.put("staffs/"+t,e)}},{key:"deleteStaff",value:function(t){return this.http.delete("staffs/"+t)}}]),e}()).\u0275fac=function(t){return new(t||o)(b.Sb(l.b))},o.\u0275prov=b.Fb({token:o,factory:o.\u0275fac,providedIn:"root"}),o),u=r("3Pt+"),s=r("tyNb");function d(t,e){1&t&&(b.Ob(0,"div"),b.uc(1,"L\xe1i xe"),b.Nb())}function m(t,e){1&t&&(b.Ob(0,"div"),b.uc(1,"Ki\u1ec3m so\xe1t v\xe9"),b.Nb())}function h(t,e){1&t&&(b.Ob(0,"div"),b.uc(1,"\u0110i\u1ec1u h\xe0nh vi\xean"),b.Nb())}function p(t,e){1&t&&(b.Ob(0,"div"),b.uc(1,"Admin"),b.Nb())}function v(t,e){1&t&&(b.Ob(0,"div"),b.uc(1,"Ch\u01b0a thi\u1ebft l\u1eadp"),b.Nb())}function N(t,e){if(1&t&&(b.Ob(0,"tr",18),b.Ob(1,"td",19),b.uc(2),b.Nb(),b.Ob(3,"td",16),b.uc(4),b.Nb(),b.Ob(5,"td",16),b.Ob(6,"div",20),b.sc(7,d,2,0,"div",21),b.sc(8,m,2,0,"div",21),b.sc(9,h,2,0,"div",21),b.sc(10,p,2,0,"div",21),b.sc(11,v,2,0,"div",22),b.Nb(),b.Nb(),b.Ob(12,"td",16),b.Ob(13,"a",23),b.Kb(14,"i",24),b.Nb(),b.Ob(15,"a",25),b.Kb(16,"i",26),b.Nb(),b.Ob(17,"a",27),b.Kb(18,"i",28),b.Nb(),b.Nb(),b.Nb()),2&t){var n=e.$implicit,i=e.index;b.zb(2),b.vc(i+1),b.zb(2),b.vc(n.name),b.zb(2),b.fc("ngSwitch",n.role_code),b.zb(1),b.fc("ngSwitchCase",1),b.zb(1),b.fc("ngSwitchCase",2),b.zb(1),b.fc("ngSwitchCase",3),b.zb(1),b.fc("ngSwitchCase",4),b.zb(3),b.hc("routerLink","./details/",n.id,""),b.zb(2),b.hc("routerLink","./edit/",n.id,""),b.zb(2),b.hc("routerLink","./delete/",n.id,"")}}var O,g,y,S,k,w,x=[{path:"",component:(k=function(){function e(n,i){t(this,e),this.titleService=n,this.staffService=i,this.staffs=[],this.titleService.setTitle("Danh s\xe1ch nh\xe2n vi\xean")}return n(e,[{key:"ngOnInit",value:function(){this.loadStaff()}},{key:"loadStaff",value:function(){var t=this;this.staffService.getList().subscribe(function(e){return t.staffs=e})}}]),e}(),k.\u0275fac=function(t){return new(t||k)(b.Jb(c.b),b.Jb(f))},k.\u0275cmp=b.Db({type:k,selectors:[["app-list-staff"]],decls:29,vars:1,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-4"],[1,"app-search-box","col-md-6"],[1,"app-search-form"],["type","text","placeholder","Search...","name","search",1,"form-control","search-input",2,"height","40px"],["type","submit","value","Search",1,"btn","search-btn","btn-primary"],[1,"fas","fa-search"],[1,"ms-auto","col-md-2"],["routerLink","./create",1,"btn","btn-success"],[1,"app-card","shadow-sm","mb-4"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[1,"table","table-hover","table-borderless","table-sm","text-center","text-font"],[1,"thead-background"],[1,"align-middle"],["class","color",4,"ngFor","ngForOf"],[1,"color"],["scope","row",1,"align-middle"],[3,"ngSwitch"],[4,"ngSwitchCase"],[4,"ngSwitchDefault"],[1,"btn","btn-outline-primary",3,"routerLink"],[1,"fas","fa-info-circle"],[1,"btn","btn-outline-warning","m-2",3,"routerLink"],[1,"far","fa-edit"],[1,"btn","btn-outline-danger","m-2",3,"routerLink"],[1,"fas","fa-trash-alt"]],template:function(t,e){1&t&&(b.Ob(0,"div",0),b.Ob(1,"h1",1),b.uc(2,"Danh s\xe1ch nh\xe2n vi\xean"),b.Nb(),b.Ob(3,"div",2),b.Ob(4,"form",3),b.Kb(5,"input",4),b.Ob(6,"button",5),b.Kb(7,"i",6),b.Nb(),b.Nb(),b.Nb(),b.Ob(8,"div",7),b.Ob(9,"a",8),b.uc(10,"Th\xeam nh\xe2n vi\xean"),b.Nb(),b.Nb(),b.Nb(),b.Ob(11,"div",9),b.Ob(12,"div",10),b.Ob(13,"div",11),b.Ob(14,"div",12),b.Ob(15,"div",13),b.Ob(16,"table",14),b.Ob(17,"thead",15),b.Ob(18,"tr"),b.Ob(19,"th",16),b.uc(20,"STT"),b.Nb(),b.Ob(21,"th",16),b.uc(22,"T\xean nh\xe2n vi\xean"),b.Nb(),b.Ob(23,"th",16),b.uc(24,"Ch\u1ee9c v\u1ee5"),b.Nb(),b.Ob(25,"th",16),b.uc(26,"T\xe1c v\u1ee5"),b.Nb(),b.Nb(),b.Nb(),b.Ob(27,"tbody"),b.sc(28,N,19,10,"tr",17),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb()),2&t&&(b.zb(28),b.fc("ngForOf",e.staffs))},directives:[u.v,u.k,s.d,a.k,a.m,a.n,a.o],styles:[""]}),k)},{path:"create",component:(S=function(){function e(n,i,r,o){t(this,e),this.staffService=n,this.formBuilder=i,this.title=r,this.router2=o,this.title.setTitle("Th\xeam m\u1edbi nh\xe2n vi\xean")}return n(e,[{key:"ngOnInit",value:function(){this.createStaffForm=this.formBuilder.group({name:["",u.t.required],gender:["1",u.t.required],birthday:[,u.t.required],identity_number:["1",u.t.required],role_code:["1",u.t.required],user_name:["",u.t.required],password:["",u.t.required]})}},{key:"addStaff",value:function(){var t=this;if(this.createStaffForm.invalid)return this.message="Vui l\xf2ng \u0111i\u1ec1n \u0111\u1ea7y \u0111\u1ee7 th\xf4ng tin",console.log(this.message);var e=this.createStaffForm.value;console.log(e),this.staffService.addStaff(e).subscribe(function(e){t.message="Th\xeam nh\xe2n vi\xean m\u1edbi th\xe0nh c\xf4ng",alert(t.message),t.router2.navigateByUrl("manager/staffs")},function(e){t.message="Th\xeam nh\xe2n vi\xean m\u1edbi kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i",console.log(t.message)})}}]),e}(),S.\u0275fac=function(t){return new(t||S)(b.Jb(f),b.Jb(u.b),b.Jb(c.b),b.Jb(s.b))},S.\u0275cmp=b.Db({type:S,selectors:[["app-create-staff"]],decls:56,vars:1,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup","ngSubmit"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1","checked","",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday",1,"form-control","col-md-6"],["type","number","formControlName","identity_number",1,"form-control","col-md-6"],["formControlName","role_code",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name",1,"form-control","col-md-6"],["type","password","formControlName","password",1,"form-control","col-md-6"],["type","submit",1,"btn","btn-primary","m-2"],["routerLink","../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(b.Ob(0,"div",0),b.Ob(1,"h1",1),b.uc(2,"Th\xeam nh\xe2n vi\xean m\u1edbi"),b.Nb(),b.Nb(),b.Ob(3,"div",2),b.Ob(4,"div",3),b.Ob(5,"div",4),b.Ob(6,"div",5),b.Ob(7,"div",6),b.Ob(8,"form",7),b.Vb("ngSubmit",function(){return e.addStaff()}),b.Ob(9,"div",8),b.Ob(10,"label",9),b.uc(11,"T\xean nh\xe2n vi\xean "),b.Nb(),b.Kb(12,"input",10),b.Nb(),b.Ob(13,"div",8),b.Ob(14,"label",11),b.uc(15,"Gi\u1edbi t\xednh"),b.Nb(),b.Ob(16,"div",12),b.Kb(17,"input",13),b.Ob(18,"label",14),b.uc(19," Nam "),b.Nb(),b.Nb(),b.Ob(20,"div",12),b.Kb(21,"input",15),b.Ob(22,"label",16),b.uc(23," N\u1eef "),b.Nb(),b.Nb(),b.Nb(),b.Ob(24,"div",8),b.Ob(25,"label",17),b.uc(26,"Ng\xe0y sinh"),b.Nb(),b.Kb(27,"input",18),b.Nb(),b.Ob(28,"div",8),b.Ob(29,"label",17),b.uc(30,"S\u1ed1 CMND "),b.Nb(),b.Kb(31,"input",19),b.Nb(),b.Ob(32,"div",8),b.Ob(33,"label",17),b.uc(34,"Ch\u1ee9c v\u1ee5 "),b.Nb(),b.Ob(35,"select",20),b.Ob(36,"option",21),b.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),b.Nb(),b.Ob(38,"option",22),b.uc(39,"L\xe1i xe"),b.Nb(),b.Ob(40,"option",23),b.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),b.Nb(),b.Ob(42,"option",24),b.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),b.Nb(),b.Nb(),b.Nb(),b.Ob(44,"div",8),b.Ob(45,"label",17),b.uc(46,"T\xean t\xe0i kho\u1ea3n"),b.Nb(),b.Kb(47,"input",25),b.Nb(),b.Ob(48,"div",8),b.Ob(49,"label",17),b.uc(50,"M\u1eadt kh\u1ea9u"),b.Nb(),b.Kb(51,"input",26),b.Nb(),b.Ob(52,"button",27),b.uc(53,"Th\xeam nh\xe2n vi\xean m\u1edbi"),b.Nb(),b.Ob(54,"a",28),b.uc(55,"Tr\u1edf l\u1ea1i danh s\xe1ch"),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb()),2&t&&(b.zb(8),b.fc("formGroup",e.createStaffForm))},directives:[u.v,u.k,u.f,u.a,u.j,u.e,u.p,u.n,u.s,u.m,u.u,s.d],styles:[""]}),S)},{path:"details/:id",component:(y=function(){function e(n,i,r,o){t(this,e),this.titleService=n,this.router=i,this.staffService=r,this.formBuilder=o,this.titleService.setTitle("Chi ti\u1ebft nh\xe2n vi\xean")}return n(e,[{key:"ngOnInit",value:function(){var t=this,e=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(e).subscribe(function(e){return t.staff=e}),this.initForm(),this.staffService.getStaff(e).subscribe(function(e){return t.pathStaffFormValue(e)})}},{key:"initForm",value:function(){this.detailsStaffForm=this.formBuilder.group({name:["",u.t.required],gender:["",u.t.required],birthday:["",u.t.required],identity_number:["",u.t.required],role_code:["",u.t.required],user_name:["",u.t.required],password:["",u.t.required]})}},{key:"pathStaffFormValue",value:function(t){this.detailsStaffForm.patchValue({name:t.name,gender:t.gender,birthday:t.birthday,identity_number:t.identity_number,role_code:t.role_code,user_name:t.user_name,password:t.password})}}]),e}(),y.\u0275fac=function(t){return new(t||y)(b.Jb(c.b),b.Jb(s.a),b.Jb(f),b.Jb(u.b))},y.\u0275cmp=b.Db({type:y,selectors:[["app-details-staff"]],decls:54,vars:2,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name","disabled","",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1","disabled","",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2","disabled","",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday","disabled","",1,"form-control","col-md-6"],["type","number","formControlName","identity_number","disabled","",1,"form-control","col-md-6"],["formControlName","role_code","disabled","",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name","disabled","",1,"form-control","col-md-6"],["type","password","formControlName","password","disabled","",1,"form-control","col-md-6"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(b.Ob(0,"div",0),b.Ob(1,"h1",1),b.uc(2),b.Nb(),b.Nb(),b.Ob(3,"div",2),b.Ob(4,"div",3),b.Ob(5,"div",4),b.Ob(6,"div",5),b.Ob(7,"div",6),b.Ob(8,"form",7),b.Ob(9,"div",8),b.Ob(10,"label",9),b.uc(11,"T\xean nh\xe2n vi\xean "),b.Nb(),b.Kb(12,"input",10),b.Nb(),b.Ob(13,"div",8),b.Ob(14,"label",11),b.uc(15,"Gi\u1edbi t\xednh"),b.Nb(),b.Ob(16,"div",12),b.Kb(17,"input",13),b.Ob(18,"label",14),b.uc(19," Nam "),b.Nb(),b.Nb(),b.Ob(20,"div",12),b.Kb(21,"input",15),b.Ob(22,"label",16),b.uc(23," N\u1eef "),b.Nb(),b.Nb(),b.Nb(),b.Ob(24,"div",8),b.Ob(25,"label",17),b.uc(26,"Ng\xe0y sinh"),b.Nb(),b.Kb(27,"input",18),b.Nb(),b.Ob(28,"div",8),b.Ob(29,"label",17),b.uc(30,"S\u1ed1 CMND "),b.Nb(),b.Kb(31,"input",19),b.Nb(),b.Ob(32,"div",8),b.Ob(33,"label",17),b.uc(34,"Ch\u1ee9c v\u1ee5 "),b.Nb(),b.Ob(35,"select",20),b.Ob(36,"option",21),b.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),b.Nb(),b.Ob(38,"option",22),b.uc(39,"L\xe1i xe"),b.Nb(),b.Ob(40,"option",23),b.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),b.Nb(),b.Ob(42,"option",24),b.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),b.Nb(),b.Nb(),b.Nb(),b.Ob(44,"div",8),b.Ob(45,"label",17),b.uc(46,"T\xean t\xe0i kho\u1ea3n"),b.Nb(),b.Kb(47,"input",25),b.Nb(),b.Ob(48,"div",8),b.Ob(49,"label",17),b.uc(50,"M\u1eadt kh\u1ea9u"),b.Nb(),b.Kb(51,"input",26),b.Nb(),b.Ob(52,"a",27),b.uc(53,"Tr\u1edf l\u1ea1i danh s\xe1ch"),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb()),2&t&&(b.zb(2),b.wc("Thay \u0111\u1ed5i th\xf4ng tin nh\xe2n vi\xean ",null==e.staff?null:e.staff.name,""),b.zb(6),b.fc("formGroup",e.detailsStaffForm))},directives:[u.v,u.k,u.f,u.a,u.j,u.e,u.p,u.n,u.s,u.m,u.u,s.d],styles:[""]}),y)},{path:"edit/:id",component:(g=function(){function e(n,i,r,o){t(this,e),this.titleService=n,this.staffService=i,this.router=r,this.formBuilder=o,this.titleService.setTitle("Ch\u1ec9nh s\u1eeda th\xf4ng tin nh\xe2n vi\xean")}return n(e,[{key:"ngOnInit",value:function(){var t=this,e=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(e).subscribe(function(e){return t.staff=e}),this.initForm(),this.staffService.getStaff(e).subscribe(function(e){return t.pathStaffFormValue(e)})}},{key:"initForm",value:function(){this.editStaffForm=this.formBuilder.group({name:["",u.t.required],gender:["",u.t.required],birthday:["",u.t.required],identity_number:["",u.t.required],role_code:["",u.t.required],user_name:["",u.t.required],password:["",u.t.required]})}},{key:"pathStaffFormValue",value:function(t){this.editStaffForm.patchValue({name:t.name,gender:t.gender,birthday:t.birthday,identity_number:t.identity_number,role_code:t.role_code,user_name:t.user_name,password:t.password})}},{key:"updateStaff",value:function(){var t=this;if(this.editStaffForm.invalid)return this.message="Vui l\xf2ng ki\u1ec3m tra l\u1ea1i th\xf4ng tin";var e=this.editStaffForm.value,n=this.router.snapshot.paramMap.get("id");this.staffService.updateStaff(n,e).subscribe(function(e){t.message="S\u1eeda th\xf4ng tin tr\u1ea1m th\xe0nh c\xf4ng",console.log(t.message)},function(e){t.message="S\u1eeda th\xf4ng tin tr\u1ea1m kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i!",console.log(t.message)})}}]),e}(),g.\u0275fac=function(t){return new(t||g)(b.Jb(c.b),b.Jb(f),b.Jb(s.a),b.Jb(u.b))},g.\u0275cmp=b.Db({type:g,selectors:[["app-edit-staff"]],decls:56,vars:2,consts:[[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[3,"formGroup","ngSubmit"],[1,"form-group","row"],["for","name",1,"form-label","col-md-2","form-name"],["type","text","formControlName","name","id","name",1,"form-control","col-md-6"],[1,"form-label","col-md-2"],[1,"form-check","col-md-1"],["type","radio","formControlName","gender","value","1","id","flexRadioDefault1",1,"form-check-input"],["for","flexRadioDefault1",1,"form-check-label"],["type","radio","name","gender","value","0","id","flexRadioDefault2",1,"form-check-input"],["for","flexRadioDefault2",1,"form-check-label"],[1,"form-label","col-md-2","form-name"],["type","date","formControlName","birthday",1,"form-control","col-md-6"],["type","number","formControlName","identity_number",1,"form-control","col-md-6"],["formControlName","role_code",1,"form-select","col-md-6","form-control"],["selected","","disabled",""],["value","1"],["value","2"],["value","3"],["type","text","formControlName","user_name","disabled","",1,"form-control","col-md-6"],["type","password","formControlName","password",1,"form-control","col-md-6"],["type","submit",1,"btn","btn-primary","m-2"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(b.Ob(0,"div",0),b.Ob(1,"h1",1),b.uc(2),b.Nb(),b.Nb(),b.Ob(3,"div",2),b.Ob(4,"div",3),b.Ob(5,"div",4),b.Ob(6,"div",5),b.Ob(7,"div",6),b.Ob(8,"form",7),b.Vb("ngSubmit",function(){return e.updateStaff()}),b.Ob(9,"div",8),b.Ob(10,"label",9),b.uc(11,"T\xean nh\xe2n vi\xean "),b.Nb(),b.Kb(12,"input",10),b.Nb(),b.Ob(13,"div",8),b.Ob(14,"label",11),b.uc(15,"Gi\u1edbi t\xednh"),b.Nb(),b.Ob(16,"div",12),b.Kb(17,"input",13),b.Ob(18,"label",14),b.uc(19," Nam "),b.Nb(),b.Nb(),b.Ob(20,"div",12),b.Kb(21,"input",15),b.Ob(22,"label",16),b.uc(23," N\u1eef "),b.Nb(),b.Nb(),b.Nb(),b.Ob(24,"div",8),b.Ob(25,"label",17),b.uc(26,"Ng\xe0y sinh"),b.Nb(),b.Kb(27,"input",18),b.Nb(),b.Ob(28,"div",8),b.Ob(29,"label",17),b.uc(30,"S\u1ed1 CMND "),b.Nb(),b.Kb(31,"input",19),b.Nb(),b.Ob(32,"div",8),b.Ob(33,"label",17),b.uc(34,"Ch\u1ee9c v\u1ee5 "),b.Nb(),b.Ob(35,"select",20),b.Ob(36,"option",21),b.uc(37,"Ch\u1ecdn ch\u1ee9c v\u1ee5 ... "),b.Nb(),b.Ob(38,"option",22),b.uc(39,"L\xe1i xe"),b.Nb(),b.Ob(40,"option",23),b.uc(41,"Ki\u1ec3m so\xe1t v\xe9"),b.Nb(),b.Ob(42,"option",24),b.uc(43,"\u0110i\u1ec1u h\xe0nh vi\xean"),b.Nb(),b.Nb(),b.Nb(),b.Ob(44,"div",8),b.Ob(45,"label",17),b.uc(46,"T\xean t\xe0i kho\u1ea3n"),b.Nb(),b.Kb(47,"input",25),b.Nb(),b.Ob(48,"div",8),b.Ob(49,"label",17),b.uc(50,"M\u1eadt kh\u1ea9u"),b.Nb(),b.Kb(51,"input",26),b.Nb(),b.Ob(52,"button",27),b.uc(53,"L\u01b0u th\xf4ng tin"),b.Nb(),b.Ob(54,"a",28),b.uc(55,"Tr\u1edf l\u1ea1i danh s\xe1ch"),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb()),2&t&&(b.zb(2),b.wc("Thay \u0111\u1ed5i th\xf4ng tin nh\xe2n vi\xean ",null==e.staff?null:e.staff.name,""),b.zb(6),b.fc("formGroup",e.editStaffForm))},directives:[u.v,u.k,u.f,u.a,u.j,u.e,u.p,u.n,u.s,u.m,u.u,s.d],styles:[""]}),g)},{path:"delete/:id",component:(O=function(){function e(n,i,r,o){t(this,e),this.titleService=n,this.staffService=i,this.router=r,this.router2=o}return n(e,[{key:"ngOnInit",value:function(){var t=this,e=this.router.snapshot.paramMap.get("id");this.staffService.getStaff(e).subscribe(function(e){return t.staff=e})}},{key:"deleteStaff",value:function(t){var e=this;this.staffService.deleteStaff(t).subscribe(function(t){e.message="X\xf3a tr\u1ea1m th\xe0nh c\xf4ng",console.log(e.message),e.router2.navigateByUrl("/manager/staffs")},function(t){e.message="X\xf3a tr\u1ea1m kh\xf4ng th\xe0nh c\xf4ng, vui l\xf2ng th\u1eed l\u1ea1i",console.log(e.message)})}}]),e}(),O.\u0275fac=function(t){return new(t||O)(b.Jb(c.b),b.Jb(f),b.Jb(s.a),b.Jb(s.b))},O.\u0275cmp=b.Db({type:O,selectors:[["app-delete-staff"]],decls:12,vars:1,consts:[[1,"app-card","shadow-sm","mb-4","text-font"],[1,"inner"],[1,"app-card-body","p-3","p-lg-4"],[1,"row","gx-5","gy-3"],[1,"col-12"],[1,"row","my-3","text-font"],[1,"app-page-title","col-md-12"],["href","javascript:;",1,"btn","btn-danger","m-2",3,"click"],["routerLink","../../",1,"btn","btn-secondary"]],template:function(t,e){1&t&&(b.Ob(0,"div",0),b.Ob(1,"div",1),b.Ob(2,"div",2),b.Ob(3,"div",3),b.Ob(4,"div",4),b.Ob(5,"div",5),b.Ob(6,"h1",6),b.uc(7),b.Nb(),b.Nb(),b.Ob(8,"a",7),b.Vb("click",function(){return e.deleteStaff(e.staff.id)}),b.uc(9,"X\xf3a tr\u1ea1m"),b.Nb(),b.Ob(10,"a",8),b.uc(11,"Tr\u1edf l\u1ea1i danh s\xe1ch"),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb(),b.Nb()),2&t&&(b.zb(7),b.wc("X\xf3a ",null==e.staff?null:e.staff.name," ?"))},directives:[s.d],styles:[""]}),O)}],C=((w=function e(){t(this,e)}).\u0275mod=b.Hb({type:w}),w.\u0275inj=b.Gb({factory:function(t){return new(t||w)},imports:[[a.c,s.e.forChild(x),u.q]]}),w)}}])}();