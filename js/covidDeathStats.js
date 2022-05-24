let totalDeaths = [];
let todayDeaths = 0;
const getCovidDeathStats = async () => {
  try {
    const response = await fetch('https://covid-19-greece.herokuapp.com/deaths');
    const greece = await response.json();

    const labels = greece.cases.map(function (e) {
      let a = e.date.substr(8, 2);
      let b = e.date.substr(5, 2);
      let x = a + "/" + b;
      return x;
    });

    const data = greece.cases.map((e) => {
      totalDeaths.push(e.deaths);
      if (totalDeaths.length > 1) {
        todayDeaths = totalDeaths[1] - totalDeaths[0];
        totalDeaths[0] = totalDeaths[1];
        totalDeaths.pop();
      }
      return todayDeaths;          
    });

    const ctx = canvas.getContext('2d');

    const config = {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Ελλάδα - Θάνατοι λόγω covid-19',
          data: data,
          backgroundColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 0.5
        }]
      },
      options: {
        maintainAspectRatio: true,
        responsive: true
      }
    };
    const chart = new Chart(ctx, config);
  }
  catch (err) {
    console.log(`Error: ${err}`);
  }
};
getCovidDeathStats();