new Morris.Bar({element:"questionsBar",data:[{month:"Январь","Вопросы":20},{month:"Февраль","Вопросы":30},{month:"Март","Вопросы":10},{month:"Апрель","Вопросы":50},{month:"Май","Вопросы":80}],xkey:"month",ykeys:["Вопросы"],labels:["Вопросы"],resize:!0}),new Morris.Donut({element:"usersDonut",data:[{label:"Клиенты",value:20},{label:"Юристы",value:10},{label:"Юридические компании",value:1}],xkey:"label",ykeys:["value"],resize:!0}),new Morris.Donut({element:"questionsDonut",data:[{label:"Бесплатные",value:20},{label:"Платные",value:10}],xkey:"label",ykeys:["value"],resize:!0});