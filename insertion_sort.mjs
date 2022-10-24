// export function insertionSort(tableau) {
//   const n = tableau.length;
const arr = [22, 1, 7, 33, 12];

function insertionSort(arr) {

  for (let i = 1; i < arr.length; i++) {
  // on itere à partir de la seconde valeur index 1
  const value = arr[i];
  let j;
  //on declare notre variable j
  //et on va partir de l'élement juste avant
  for(j = i - 1; j >= 0 && arr[j] > value; j--;{
  //j est superieur ou egal à 0 et l'autre condition c'est qu'elle soit 
  //superieur à la valeur memorisee auparavant.
      arr[j + 1] = arr[j]
      }
      arr [j + 1] - value;
    }
  }
  insertionSort(arr);
  console.log(arr);