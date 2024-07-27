import{T as h,d as i,a as e,b as t,u as o,t as w,e as c,h as x,c as y,w as m,n as v,F as k,o as d,Z as V,f as u,i as f}from"./app-e2db4881.js";import{_ as N}from"./AuthenticationCardLogo-e296eefa.js";import{_ as B}from"./Checkbox-567f224a.js";import{_ as p,a as b}from"./TextInput-92d4a7d9.js";import{_}from"./InputLabel-d7def00e.js";import{N as S}from"./Navbar-66463861.js";import"./logo-e04a0658.js";import"./ResponsiveNavLink-595449cf.js";import"./_plugin-vue_export-helper-c27b6911.js";const $=e("img",{id:"background",class:"absolute -left-20 top-0 max-w-[877px]",src:"https://laravel.com/assets/img/welcome/background.svg"},null,-1),C={class:"fixed w-full h-full colousel-bgl"},F={class:"bg-secondary-900/80 w-full h-full overflow-y-auto"},L={class:"bg-secondary-500"},q={class:"px-4"},P={class:"max-w-sm mx-auto px-4 py-7 my-24 bg-secondary-100/10 shadow backdrop-blur rounded-md"},R={class:"text-center"},U=e("h1",{class:"text-2xl my-4 mt-7 text-white font-bold"},"Sign in",-1),E={key:0,class:"mb-4 font-medium text-sm text-green-600"},T=["onSubmit"],z={class:"mt-4"},D={class:"grid grid-cols-2 mt-4"},M={class:"flex items-center"},Z=e("span",{class:"ml-2 text-sm text-secondary-100"},"Remember me",-1),j=["disabled"],X={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(n){const s=h({email:"",password:"",remember:!1}),g=()=>{s.transform(l=>({...l,remember:s.remember?"on":""})).post(route("login"),{onFinish:()=>s.reset("password")})};return(l,r)=>(d(),i(k,null,[$,e("section",C,[e("div",F,[t(o(V),{title:"Log in"}),e("header",L,[t(S)]),e("div",q,[e("div",P,[e("div",R,[t(N,{class:"block mx-auto w-16"})]),U,n.status?(d(),i("div",E,w(n.status),1)):c("",!0),e("form",{onSubmit:x(g,["prevent"])},[e("div",null,[t(_,{for:"email",value:"Email",class:"text-white"}),t(p,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":r[0]||(r[0]=a=>o(s).email=a),type:"email",class:"mt-1 block w-full bg-secondary-500/10 backdrop-blur border-secondary-300",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),t(b,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),e("div",z,[t(_,{for:"password",value:"Password",class:"text-white"}),t(p,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":r[1]||(r[1]=a=>o(s).password=a),type:"password",class:"mt-1 block w-full bg-secondary-500/10 backdrop-blur border-secondary-300",required:"",autocomplete:"current-password"},null,8,["modelValue"]),t(b,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",D,[e("label",M,[t(B,{checked:o(s).remember,"onUpdate:checked":r[2]||(r[2]=a=>o(s).remember=a),name:"remember"},null,8,["checked"]),Z]),n.canResetPassword?(d(),y(o(f),{key:0,href:l.route("password.request"),class:"text-center block underline text-sm text-secondary-100 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:m(()=>[u(" Forgot your password? ")]),_:1},8,["href"])):c("",!0)]),e("div",null,[e("button",{class:v(["rounded bg-primary-700/30 border border-secondary-500 hover:bg-primary-800 transition text-white uppercase font-bold px-4 py-2 block w-full mt-7 mb-2 backdrop-blur",{"opacity-25":o(s).processing}]),disabled:o(s).processing},"Log in",10,j),t(o(f),{href:l.route("register"),class:"text-center block underline text-sm text-secondary-100 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:m(()=>[u(" Not a member? Create account ")]),_:1},8,["href"])])],40,T)])])])])],64))}};export{X as default};