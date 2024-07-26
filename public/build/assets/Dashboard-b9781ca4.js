import{D as p}from"./DashboardLaout-2e450c2b.js";import{x as R,d as i,f as r,t as e,a as t,o as l,i as S,Z as A,r as b,j as c,b as o,w as v,F as y,g as w}from"./app-e2db4881.js";import F from"./GaugeChart-b7608a17.js";import B from"./ProfitReportChart-3e1e7666.js";import I from"./PieChart-5614f394.js";import T from"./AreaChart-a47c3b63.js";import E from"./RadialChart-50c8b58e.js";import{_ as N}from"./_plugin-vue_export-helper-c27b6911.js";const O={key:0,class:"text-green-500 text-xs"},V=t("i",{class:"fas fa-arrow-up"},null,-1),j={key:1,class:"text-green-500 text-xs"},L=t("i",{class:"fas fa-arrow-right"},null,-1),Y={key:2,class:"text-red-500 text-xs"},z=t("i",{class:"fas fa-arrow-down"},null,-1),G=R({__name:"BiCount",props:{last:{},current:{}},setup(u){return(d,s)=>(l(),i("div",null,[d.current>d.last?(l(),i("p",O,[V,r(" "+e(d.current)+" this Month ",1)])):d.current==d.last?(l(),i("p",j,[L,r(" "+e(d.current)+" this Month ",1)])):(l(),i("p",Y,[z,r(" "+e(d.current)+" this Month ",1)]))]))}}),H="/build/assets/man_with_laptop_light-2130f2f7.png",J={components:{DashboardLayout:p,Link:S,Head:A,GaugeChart:F,ProfitReportChart:B,PieChart:I,AreaChart:T,RadialChart:E,BiCount:G},layout:p,props:{data:Object},setup(u){const s=b({chart:{id:"vuechart-example"},xaxis:{categories:(()=>{const h=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],f=new Date().getMonth(),m=[];for(let g=0;g<=7;g++){const x=(f-g+12)%12;m.push(h[x])}return m.reverse(),m})()},stroke:{curve:"smooth"},colors:["#66DA26","#2E93fA","#546E7A","#E91E63","#FF9800"]}),_=b([{name:"series-1",data:[0,0,0,0,0,0,0,0]}]);return{sideToggle(){document.getElementById("side").classList.toggle("hidden")},chartOptions:s,series:_,currentYear:()=>new Date().getFullYear(),growthPer:(h,a)=>(a==0?1:a)/(h==0?1:h)*100}}},K={class:"max-w-12xl mx-auto px-2"},W={class:"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4"},Z={class:"col-span-2 md:col-span-3 lg:col-span-4 shadow-sm rounded bg-white p-3"},U={class:"grid md:grid-cols-4 gap-4 place-item-end"},q={class:"md:col-span-3"},Q={key:0},X=t("h3",{class:"text-xl text-indigo-500"}," Congratulations ",-1),$={key:1},tt=t("h3",{class:"text-xl text-indigo-500"}," Unfortunately ",-1),st=t("button",{class:"text-indigo-500 px-2 py-1 mt-4 border border-indigo-500 rounded hover:bg-indigo-500 hover:text-white transition"}," View Badges ",-1),et=t("img",{src:H,class:"selft-end mx-auto max-w-24",alt:""},null,-1),ot={class:"flex lg:inline shadow-sm rounded bg-white p-3 space-x-2"},at=t("i",{class:"self-center p-4 bg-sky-100 text-sky-500 rounded-md fas fa-ticket"},null,-1),nt={class:"flex-auto sm:text-center lg:text-left self-center"},it=t("p",{class:"mt-2"},"Plans",-1),lt={class:"text-2xl font-bold"},dt={class:"flex lg:inline shadow-sm rounded bg-white p-3 space-x-2"},ct=t("i",{class:"self-center p-4 bg-teal-100 text-teal-500 rounded-md fas fa-file-invoice-dollar"},null,-1),rt={class:"flex-auto sm:text-center lg:text-left self-center"},_t=t("p",{class:"mt-2"},"SALES",-1),ht={class:"md:text-3xl font-bold"},ut=t("span",{class:"text-xs"},"K",-1),mt={class:"hidden md:flex lg:hidden shadow-sm rounded bg-white p-3"},gt=t("i",{class:"self-center p-4 bg-orange-100 text-orange-500 rounded-md fas fa-users"},null,-1),ft={class:"flex-auto text-center self-center"},xt=t("p",{class:"mt-2"},"VISITORS",-1),vt={class:"text-2xl font-bold"},pt={class:"grid grid-cols-2 lg:grid-cols-6 md:grid-cols-3 gap-4 my-7"},bt={class:"grid md:grid-cols-3 min-h-70 col-span-2 md:col-span-3 lg:col-span-4 c bg-white transition rounded-md shadow-sm p-4 flex"},yt={class:"md:border-l"},wt={class:"grid grid-col-2 col-span-2 md:col-span-3 lg:col-span-2 lg:grid-cols-2 md:grid-cols-3 gap-4"},kt={class:"md:hidden lg:flex text-center flex-col justify-evenly justify-evenly place-items-center shadow-sm rounded bg-white p-3"},Ct=t("i",{class:"self-center p-4 bg-orange-100 text-orange-500 rounded-md fas fa-users"},null,-1),Pt={class:"flex-auto self-center"},Mt=t("p",{class:"mt-2"},"VISITORS",-1),Dt={class:"text-2xl font-bold"},Rt={class:"flex flex-col justify-evenly place-items-center shadow-sm rounded bg-white p-3"},St=t("div",null,[t("i",{class:"inline-block p-4 bg-teal-100 text-teal-500 rounded-md fas fa-users"})],-1),At=t("p",{class:"mt-2"},"USERS",-1),Ft={class:"md:text-3xl font-bold"},Bt={class:"col-span-2 grid grid-cols-6 shadow-sm rounded bg-white p-3"},It={class:"col-span-2 flex flex-col justify-evenly"},Tt=t("p",{class:"mt-2 font-bold"},"Profit Report",-1),Et=t("p",{class:"mt-2 uppercase rounded bg-primary-50 px-2 text-primary-600 inline py-1 text-sm"}," This month ",-1),Nt={class:"md:text-xl font-bold"},Ot=t("span",{class:"text-xs"},"ZMW",-1),Vt={class:"col-span-4"},jt={class:"grid md:grid-cols-2 lg:grid-cols-3 gap-4"},Lt={class:"shadow-sm rounded bg-white p-3 text-secondary-400"},Yt={class:"flex"},zt={class:"flex-auto"},Gt=t("h2",{class:"font-bold text-2xl text-secondary-600"}," Order Statistics ",-1),Ht=t("button",{class:"curso-pointer p-2"},[t("i",{class:"fa-solid fa-ellipsis-vertical"})],-1),Jt=t("ul",{class:"shadow rounded text-left"},[t("li",{class:"p-2 border-b border-gray-100 hover:bg-gray-100 transition cursor-pointer"}," Refresh "),t("li",{class:"p-2 border-b border-gray-100 hover:bg-gray-100 transition cursor-pointer"}," View All ")],-1),Kt={class:"flex mt-2"},Wt={class:"flex-auto self-center"},Zt={class:"text-secondary-600 font-bold text-2xl"},Ut=t("p",null,"Total Orders",-1),qt={class:"mt-4"},Qt=t("i",{class:"self-center p-2 rounded bg-sky-100 mr-1 text-sky-500 fas fa-dollar"},null,-1),Xt={class:"flex-auto"},$t={class:"font-bold capitalize text-secondary-600"},ts={class:"font-light text-sm"},ss={class:"self-center shrink-0"},es={class:"shadow-sm rounded bg-white p-3"},os=t("div",{class:"grid grid-cols-3 gap-4 mb-3"},[t("button",{class:"px-2 py-2 bg-indigo-500 hover:bg-indigo-600 transition text-white rounded"}," Income "),t("button",{class:"hover:text-indigo-500 transition"}," Income "),t("button",{class:"hover:text-indigo-500 transition"}," Income ")],-1),as={class:"flex gap-3 rounded hover:bg-secondary-50 transition cursor-pointer p-1"},ns=t("i",{class:"self-center p-3 rounded bg-sky-100 mr-1 text-sky-500 fas fa-dollar"},null,-1),is={class:"flex-auto"},ls=t("h4",{class:"capitalize text-secondary-600"}," Total Balance ",-1),ds={class:"font-bold"},cs={class:"text-green-500"},rs=t("i",{class:"ml-2 fas fa-angle-up"},null,-1),_s={class:"flex"},hs=t("div",{class:"self-center flex-auto"},[t("p",{class:"font-bold"},"Expenses This Week"),t("p",null,"$39 less than last week")],-1),us={class:"shadow-sm rounded bg-white p-3"},ms={class:"flex"},gs=t("div",{class:"flex-auto"},[t("h2",{class:"font-bold text-2xl text-secondary-600"}," Transactions ")],-1),fs=t("button",{class:"curso-pointer p-2"},[t("i",{class:"fa-solid fa-ellipsis-vertical"})],-1),xs=t("ul",{class:"shadow rounded text-left"},[t("li",{class:"p-2 border-b border-gray-100 hover:bg-gray-100 transition cursor-pointer"}," Refresh "),t("li",{class:"p-2 border-b border-gray-100 hover:bg-gray-100 transition cursor-pointer"}," View All ")],-1),vs={class:"mt-2 text-secondary-400"},ps=t("i",{class:"self-center p-3 rounded bg-sky-100 mr-1 text-sky-500 fas fa-dollar"},null,-1),bs={class:"flex-auto"},ys={class:"font-bold capitalize text-secondary-600"},ws={class:"font-light text-sm"},ks={class:"self-center shrink-0"};function Cs(u,d,s,_,k,C){const h=c("Head"),a=c("BiCount"),f=c("apexchart"),m=c("GaugeChart"),g=c("ProfitReportChart"),x=c("dropdown-menu"),P=c("PieChart"),M=c("AreaChart"),D=c("RadialChart");return l(),i("div",K,[o(h,{title:"Dashboard"}),t("div",W,[t("div",Z,[t("div",U,[t("div",q,[_.growthPer(s.data.invoice_sales_last_month,s.data.invoice_sales_this_month)>0?(l(),i("div",Q,[X,t("p",null," You have done "+e(u.numeralFormat(_.growthPer(s.data.invoice_sales_last_month,s.data.invoice_sales_this_month),"0,0[.]00"))+"% more sales this month as compared to last month. you're doing great, keep it going. ",1)])):(l(),i("div",$,[tt,t("p",null," You have not done much this month. You have done "+e(u.numeralFormat(_.growthPer(s.data.invoice_sales_last_month,s.data.invoice_sales_this_month),"0,0[.]00"))+"% as compared to last month. ",1)])),st]),et])]),t("div",ot,[at,t("div",nt,[it,t("p",lt,e(s.data.plan_count<10?"0":"")+e(s.data.plan_count?s.data.plan_count:"00"),1),o(a,{last:s.data.plans_count_last_month,current:s.data.plans_count_this_month},null,8,["last","current"])])]),t("div",dt,[ct,t("div",rt,[_t,t("p",ht,[ut,r(" "+e(s.data.invoice_sum?s.data.invoice_sum:"0.00"),1)]),o(a,{last:s.data.invoice_sales_last_month,current:s.data.invoice_sales_this_month},null,8,["last","current"])])]),t("div",mt,[gt,t("div",ft,[xt,t("p",vt,e(s.data.visitors<10?"0":"")+e(s.data.visitors?s.data.visitors:"00"),1),o(a,{last:s.data.visitors_count_last_month,current:s.data.visitors_count_this_month},null,8,["last","current"])])])]),t("div",pt,[t("div",bt,[o(f,{width:"100%",height:"auto",type:"line",options:_.chartOptions,series:_.series,class:"md:col-span-2"},null,8,["options","series"]),t("div",yt,[o(m,{last_month:s.data.invoice_sales_last_month,this_month:s.data.invoice_sales_this_month},null,8,["last_month","this_month"])])]),t("div",wt,[t("div",kt,[Ct,t("div",Pt,[Mt,t("p",Dt,e(s.data.visitors<10?"0":"")+e(s.data.visitors?s.data.visitors:"00"),1),o(a,{last:s.data.visitors_count_last_month,current:s.data.visitors_count_this_month},null,8,["last","current"])])]),t("div",Rt,[St,At,t("p",Ft,e(s.data.users?s.data.users:"00"),1),o(a,{last:s.data.users_count_last_month,current:s.data.users_count_this_month},null,8,["last","current"])]),t("div",Bt,[t("div",It,[Tt,Et,t("p",Nt,[Ot,r(" "+e(s.data.invoice_sum?s.data.invoice_sum:"0.00"),1)]),o(a,{last:s.data.invoice_count_last_month,current:s.data.invoice_count_this_month},null,8,["last","current"])]),t("div",Vt,[o(g)])])])]),t("div",jt,[t("div",Lt,[t("div",Yt,[t("div",zt,[Gt,t("p",null,"Total Sales - "+e(s.data.invoice_sum)+" zmw",1)]),o(x,{overlay:!1,direction:"right"},{trigger:v(()=>[Ht]),body:v(()=>[Jt]),_:1})]),t("div",Kt,[t("div",Wt,[t("h2",Zt,e(s.data.invoice_count),1),Ut]),o(P)]),t("div",qt,[(l(!0),i(y,null,w(s.data.invoices,n=>(l(),i("div",{key:n.id,class:"flex gap-3 rounded transition p-1"},[Qt,t("div",Xt,[t("h4",$t,[r(e(n.plan.name)+" ",1),t("span",ts," - from "+e(n.customerFirstName),1)]),t("p",null,e(n.transactionName),1)]),t("p",ss," K "+e(n.amount),1)]))),128))])]),t("div",es,[os,t("div",as,[ns,t("div",is,[ls,t("p",ds,[r(" ZMW "+e(s.data.invoice_sum)+" ",1),t("span",cs,[rs,r(" "+e(u.numeralFormat(_.growthPer(s.data.invoice_sales_last_month,s.data.invoice_sales_this_month),"0,0[.]00"))+" %",1)])])])]),o(M),t("div",_s,[o(D),hs])]),t("div",us,[t("div",ms,[gs,o(x,{overlay:!1,direction:"right"},{trigger:v(()=>[fs]),body:v(()=>[xs]),_:1})]),t("div",vs,[(l(!0),i(y,null,w(s.data.invoices,n=>(l(),i("div",{key:n.id,class:"flex gap-3 rounded transition px-1 py-2 border-b"},[ps,t("div",bs,[t("h4",ys,[r(e(n.plan.name)+" ",1),t("span",ws," - from "+e(n.customerFirstName),1)]),t("p",null,e(n.transactionName),1)]),t("p",ks," K "+e(n.amount),1)]))),128))])])])])}const Is=N(J,[["render",Cs]]);export{Is as default};
