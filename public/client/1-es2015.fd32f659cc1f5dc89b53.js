(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{HunT:function(t,n,b){"use strict";b.r(n),b.d(n,"ProfileModule",function(){return u});var e=b("ofXK"),r=b("fXoL"),o=b("3Pt+"),i=b("tyNb");let c=(()=>{class t{constructor(){}ngOnInit(){}}return t.\u0275fac=function(n){return new(n||t)},t.\u0275cmp=r.Db({type:t,selectors:[["app-change-password"]],decls:19,vars:0,consts:[[1,"mb-3"],["for","exampleInputPassword1",1,"form-label"],["type","oldPassword","id","exampleInputOldPassword1",1,"form-control"],["type","newPassword","id","exampleInputNewPassword",1,"form-control"],["type","newPassword1","id","exampleInputNewPassword1",1,"form-control"],["type","submit",1,"btn","btn-primary"],["routerLink","../detail-staff",1,"btn","btn-secondary"]],template:function(t,n){1&t&&(r.Ob(0,"h1"),r.uc(1,"Thay \u0111\u1ed5i m\u1eadt kh\u1ea9u"),r.Nb(),r.Ob(2,"form"),r.Ob(3,"div",0),r.Ob(4,"label",1),r.uc(5,"Nh\u1eadp m\u1ea9u kh\u1ea9u c\u0169: "),r.Nb(),r.Kb(6,"input",2),r.Nb(),r.Ob(7,"div",0),r.Ob(8,"label",1),r.uc(9,"Nh\u1eadp m\u1eadt kh\u1ea9u m\u1edbi: "),r.Nb(),r.Kb(10,"input",3),r.Nb(),r.Ob(11,"div",0),r.Ob(12,"label",1),r.uc(13,"Nh\u1eadp l\u1ea1i m\u1eadt kh\u1ea9u m\u1edbi: "),r.Nb(),r.Kb(14,"input",4),r.Nb(),r.Ob(15,"button",5),r.uc(16,"X\xe1c nh\u1eadn"),r.Nb(),r.Ob(17,"a",6),r.uc(18,"Tho\xe1t"),r.Nb(),r.Nb())},directives:[o.v,o.k,i.d],styles:[""]}),t})();var a=b("jhN1");const s=[{path:"",component:(()=>{class t{constructor(t){this.title=t,this.title.setTitle("Trang qu\u1ea3n l\xfd")}ngOnInit(){}}return t.\u0275fac=function(n){return new(n||t)(r.Jb(a.b))},t.\u0275cmp=r.Db({type:t,selectors:[["app-profile"]],decls:33,vars:0,consts:[["routerLink","./edit-information/",1,"btn","btn-outline-success"],["routerLink","./change-password/",1,"btn","btn-outline-primary"],[1,"table"],["scope","col"],["scope","row"]],template:function(t,n){1&t&&(r.Ob(0,"h1"),r.uc(1,"Th\xf4ng tin Nh\xe2n vi\xean"),r.Nb(),r.Ob(2,"a",0),r.uc(3,"Ch\u1ec9nh s\u1eeda th\xf4ng tin"),r.Nb(),r.Ob(4,"a",1),r.uc(5,"Thay \u0111\u1ed5i m\u1eadt kh\u1ea9u"),r.Nb(),r.Ob(6,"table",2),r.Ob(7,"thead"),r.Ob(8,"tr"),r.Kb(9,"th",3),r.Ob(10,"th",3),r.uc(11,"Th\xf4ng tin nh\xe2n vi\xean"),r.Nb(),r.Nb(),r.Nb(),r.Ob(12,"tbody"),r.Ob(13,"tr"),r.Ob(14,"th",4),r.uc(15,"T\xean"),r.Nb(),r.Kb(16,"td"),r.Nb(),r.Ob(17,"tr"),r.Ob(18,"th",4),r.uc(19,"Gi\u1edbi t\xednh"),r.Nb(),r.Kb(20,"td"),r.Nb(),r.Ob(21,"tr"),r.Ob(22,"th",4),r.uc(23,"Ng\xe0y sinh"),r.Nb(),r.Kb(24,"td"),r.Nb(),r.Ob(25,"tr"),r.Ob(26,"th",4),r.uc(27,"S\u1ed1 CMND"),r.Nb(),r.Kb(28,"td"),r.Nb(),r.Ob(29,"tr"),r.Ob(30,"th",4),r.uc(31,"Ch\u1ee9c v\u1ee5"),r.Nb(),r.Kb(32,"td"),r.Nb(),r.Nb(),r.Nb())},directives:[i.d],styles:[""]}),t})()},{path:"change-password",component:c},{path:"edit-information",component:(()=>{class t{constructor(t){this.formBuilder=t}ngOnInit(){this.editStaffForm=this.formBuilder.group({name:["",o.t.required]})}updateStaff(){}}return t.\u0275fac=function(n){return new(n||t)(r.Jb(o.b))},t.\u0275cmp=r.Db({type:t,selectors:[["app-change-information"]],decls:13,vars:1,consts:[[1,"container"],[3,"formGroup","ngSubmit"],[1,"mb-3","row"],["for","exampleStaffName",1,"col-sm-2","col-form-label"],["formControlName","staff_name","type","text","id","exampleStaffName",1,"form-control","col-sm-5"],["type","submit",1,"btn","btn-primary","m-2"],["routerLink","../",1,"btn","btn-secondary"]],template:function(t,n){1&t&&(r.Ob(0,"div",0),r.Ob(1,"h1"),r.uc(2,"C\u1eadp nh\u1eadt th\xf4ng tin nh\xe2n vi\xean"),r.Nb(),r.Ob(3,"form",1),r.Vb("ngSubmit",function(){return n.updateStaff()}),r.Ob(4,"div",2),r.Ob(5,"label",3),r.Ob(6,"b"),r.uc(7,"T\xean nh\xe2n vi\xean :"),r.Nb(),r.Nb(),r.Kb(8,"input",4),r.Nb(),r.Ob(9,"button",5),r.uc(10,"C\u1eadp nh\u1eadt"),r.Nb(),r.Ob(11,"a",6),r.uc(12,"Tho\xe1t"),r.Nb(),r.Nb(),r.Nb()),2&t&&(r.zb(3),r.fc("formGroup",n.editStaffForm))},directives:[o.v,o.k,o.f,o.a,o.j,o.e,i.d],styles:[""]}),t})()}];let u=(()=>{class t{}return t.\u0275mod=r.Hb({type:t}),t.\u0275inj=r.Gb({factory:function(n){return new(n||t)},imports:[[e.c,o.q,i.e.forChild(s)]]}),t})()}}]);