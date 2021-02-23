
process = (process.argv);
process.splice(0,1);

process1 = Number(process)

let sum = process.reduce((acc, val) => {
    return acc + val;
  });

console.log(sum);

