let dailyTotal = [];
let todayCases = 0;
const getCovidCasesStats = async () => {
  try {
    const response = await fetch('https://covid-19-greece.herokuapp.com/confirmed');
    const greece = await response.json();

    const labels = greece.cases.map(function (e) {
      let a = e.date.substr(8, 2);
      let b = e.date.substr(5, 2);
      let x = a + "/" + b;
      return x;
    });
    const data = greece.cases.map((e) => {
      dailyTotal.push(e.confirmed);
      if (dailyTotal.length > 1) {
        todayCases = dailyTotal[1] - dailyTotal[0];
        dailyTotal[0] = dailyTotal[1];
        dailyTotal.pop();
      }
      return todayCases;
    });

    const ctx2 = canvas2.getContext('2d');

    const config = {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Ελλάδα - Κρούσματα covid-19',
          data: data,
          backgroundColor: 'rgba(0, 119, 204, 0.3)',
          borderColor: 'rgba(0, 119, 204, 0.5)',
          borderWidth: 0.5
        }]
      },
      options: {
        maintainAspectRatio: true,
        responsive: true
      }
    };
    const chart2 = new Chart(ctx2, config);
  }
  catch (err) {
    console.log(`Error: ${err}`);
  }
};
getCovidCasesStats();