function Maggiore(...input){
    input.forEach(v => {Number(v)});
    if(input.some(v => isNaN(v))){
        return "ERRORE: inserire numeri nel formato corretto."
    }
    var max = input[0];
    for(let i = 1; i<input.length;i++){
        if(input[i]>max){
            max = input[i];
        }
    }
    return max;

}