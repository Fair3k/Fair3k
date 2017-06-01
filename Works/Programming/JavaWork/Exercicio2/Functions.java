public class Functions extends Variables{

public static void Input(){
    Object[] chooseSex = {"Masculino", "Feminino"};//Asks for the sex of the user.
    int      flag      = 1; //Helps on the verification.
    for(intervield = 0; intervield <= 1000; intervield++){
      while(flag == 1){
        //Name input and verification.
        String option = window.showInputDialog("Informe o seu nome: ");
        if(option == null){
          window.showMessageDialog(null, "Nome Invalido ou nulo.");
          System.exit(0);
        }else{
          name[intervield] = option;
          optioncount++;
          if(tableTests){
            System.out.println("Name = "+name[intervield]); //Table test.
          }
          break;
        }
      }


      //Sex input and verification.
      while(flag == 1){
      Object option = window.showInputDialog(null, "Informe seu sexo: ", "Sexo", window.INFORMATION_MESSAGE, icon, chooseSex, chooseSex[0]);
      if(option == chooseSex[0]){
        mans++;
        sex[intervield] = 2;
        optioncount++;
        System.out.println(sex[intervield]);
        break;
      }else if(option == chooseSex[1]){
        womans++;
        sex[intervield] = 1;
        optioncount++;
        if(tableTests){
          System.out.println("Sex = "+sex[intervield]); //Table test.
        }
        break;
      }else{
        System.exit(0);
      }
    }

    //Weight input and verificarion (Overweight/input).
    while(flag == 1){
      double optionWeight = Double.parseDouble(window.showInputDialog("Informe o seu peso: "));
      if(optionWeight <= 0){
        window.showMessageDialog(null, "Numero invalido.", "ERROR", window.INFORMATION_MESSAGE);
      }else if(sex[intervield] == 1){
        //Female overweight verification.
        weight[intervield] = optionWeight;
        if(weight[intervield] < 19 && weight[intervield] > 0){
          status[intervield] = 0;
        }else if(weight[intervield] >= 19 && weight[intervield] < 23.9){
          status[intervield] = 1;
        }else if(weight[intervield] >= 24 && weight[intervield] < 28.9){
          status[intervield] = 2;
          overweightWomans++;
        }else if(weight[intervield] >= 29 && weight[intervield] < 38.9){
          status[intervield] = 3;
          overweightWomans++;
        }else if(weight[intervield] > 39){
          status[intervield] = 4;
          overweightWomans++;
        }

      }else if(sex[intervield] == 2){
        //Male overweight status verification.
        allMansWeight = allMansWeight + weight[intervield];
        weight[intervield] = optionWeight;
        if(weight[intervield] < 20 && weight[intervield] > 0){
          status[intervield] = 0;
        }else if(weight[intervield] >= 20 && weight[intervield] < 24.9){
          status[intervield] = 1;
        }else if(weight[intervield] >= 25 && weight[intervield] > 29.9){
          status[intervield] = 2;
          overweightMans++;
        }else if(weight[intervield] >= 30 && weight[intervield] < 39.9){
          status[intervield] = 3;
          overweightMans++;
        }else if(weight[intervield] > 43){
          status[intervield] = 4;
          overweightMans++;
        }else{
          window.showMessageDialog(null, "N\u00famero Inv\u00e1lido.");
        }
        optioncount++;
      }else if(sex[intervield] == 0){
        System.out.println("ERROR");
        System.exit(0);
      }

      if(tableTests){
        System.out.println("Weight = "+weight[intervield]); //Table test.
        System.out.println("Status = "+status[intervield]); //Table test.
        if(status[intervield] == 1){
          System.out.println("Abaixo do normal");
        }else if(status[intervield] == 2){
          System.out.println("Normal");
        }else if(status[intervield] == 3){
          System.out.println("Obesidade leve");
        }else if(status[intervield] == 4){
          System.out.println("Obesidade moderada");
        }else if(status[intervield] == 5){
          System.out.println("Obesidade M\u00f3rbida");
        }
        System.out.println("Overweight womans = " +overweightWomans); //Table test.
        System.out.println("Overweight mans  = " +overweightMans); //Table test.
      }
      break;
    }

    //Height input and verification.
    while(flag == 1){
      double optionHeight = Double.parseDouble(window.showInputDialog(null, "Informe a seu altura: "));
      if(optionHeight <= 0){
        window.showMessageDialog(null, "N\u00famero Invalido.", "ERROR", window.INFORMATION_MESSAGE);
      }else{
        height[intervield] = optionHeight;
        optioncount++;
        if(tableTests){
          System.out.println("Height = "+height[intervield]); //Table test.
        }
        break;
      }
    }



    //Age input and verification.
    while(flag == 1){
      int optionAge = Integer.parseInt(window.showInputDialog(null, "Informe sua idade: "));
      if(optionAge >= 18){
        age[intervield] = optionAge;
        optioncount++;

        int exit = window.showConfirmDialog(null, "H\u00e1 mais pessoas para serem entrevistadas?", "Mais algu\u00e9m?", window.YES_NO_OPTION);
        if(exit == window.YES_OPTION){

        }
        else{
          sexman = intervield;
        }

        if(tableTests){
          System.out.println("Age = "+age[intervield]); //Table test.

        }
        break;
      }else{
        window.showMessageDialog(null, "Pesquisa direcionada para pessoas acima de 18 anos.", "Menor de idade", window.INFORMATION_MESSAGE);
        int exit = window.showConfirmDialog(null, "Deseja sair?", "Sair", window.YES_NO_OPTION);
        if(exit == window.YES_OPTION){
          System.exit(0);
        }else{
          exit = window.showConfirmDialog(null, "H\u00e1 mais pessoas para serem entrevistadas?", "Mais algu\u00e9m?", window.YES_NO_OPTION);
          if(exit == window.YES_OPTION){

          }
          else{

            System.out.println("Bye");
            System.exit(0);
          }
        }
      }
    }
    // return;
  }//End of the loop
}
public static void userDesition(){
    desition = window.showInputDialog(null, "Informe uma op\u00e7\u00e3o: ", "Op\u00e7oes", window.INFORMATION_MESSAGE, null, userDecides, userDecides[0]);
    return;
}
public static void ListIntervield(){
  //List all the intervield people.
  for(int j = 0; j <= name.length; j++){
    listNames.append(name[j]).append("\n");
  }
  window.showMessageDialog(null, listNames);
  return;
}
public static void ListMansCalc(){
  //List all the mans calculation.
  for(int j = 0; j < intervield; j++){
    System.out.println();
  }
  return;
}
public static void ListWomansCalc(){
  //List all the womans calculation.

  return;
}
public static void ListAllOverweight(){
  //List all the overweight people.

  return;
}
public static void ListOrdenedByWeight(){
  //List each person ordened by their levels of weight.

  return;
}

public static void tableTest(){
  if(tableTests){
    System.out.println("Input Countage = "+optioncount); //Table test.
  }
  if(optioncount == 4){
    int exit = window.showConfirmDialog(null, "H\u00e1 mais pessoas para serem entrevistadas?", "Mais algu\u00e9m?", window.YES_NO_OPTION);
    if(exit == window.YES_OPTION){
      Input();
    }
  }

  if(tableTests){
    System.out.println("\n-------------------\n");
  }

}
public static void mans(){
  for(int j = 0; j < weight.length; j++){
    if(weight[j] != 0){
      totalWeight += weight[j];
      // System.out.println(totalWeight + weight[j]);
    }else{
      break;
    }
  }

  //Male sex verification.
  for(int k = 0; k <= intervield; k++){
    if(sex[k] == 2){
      System.out.println(weight[k]);
      allMansWeight = allMansWeight + weight[k];
    }
  }
  avgMansWeight = allMansWeight / mans;
  if(tableTests){
    System.out.println("Average mans weight = "+avgMansWeight);
  }

  //Mans IMC Calculation (IMC = weight / pow(Height, 2))
  for(int j = 0; j < sex.length; j++){
    if(sex[j] == 2){
      imcMans[j] = weight[j] / (Math.pow(height[j], 2));
    }else if(sex[j] == 0){
      if(tableTests){
        System.out.println("Mans IMC = "+imcMans[j]);
      }
      break;
    }
  }
}
public static void womans(){
  for(int j = 0; j < sex.length; j++){
    if(sex[j] == 1){
      allWomansWeight += avgWomansWeight;
    }else if(sex[j] == 0){
      break;
    }
  }
  avgWomansWeight = (allWomansWeight / 100) * totalWeight;
  if(tableTests){
    System.out.println("Average Womans Weight = "+avgWomansWeight);//Table test.
  }

  //Womans IMC Calculation.
  for(int j = 0; j < sex.length; j++){
    if(sex[j] == 1){
      imcWomans[j] = weight[j] / (Math.pow(height[j], 2));
    }else if (sex[j] == 0){
      if(tableTests){
        System.out.println("Womans IMC = "+imcWomans[j]);//Table test.
      }
      break;
    }
  }
}
public static void people(){
  for(int j = 0; j < weight.length; j++){
    if(status[j] >= 2){
      overweightPeople++;
    }
  }
  if(tableTests){
    System.out.println("Number of overweight people = "+overweightPeople);
  }

  //Average weight of intervield people.
  avgIntervieldPeople = (totalWeight / 100) * overweightPeople;
  if(tableTests){
    System.out.println("Average weight of intervield people = "+avgIntervieldPeople);
  }

  //Percentage of overweight people;
  percentOverWeightPeople = (intervield / 100) * overweightPeople;
  if(tableTests){
    System.out.println("Percentage of overweight people = "+percentOverWeightPeople +"%");
  }

  //Percentage of mans who are overweight.
  percentMansOverWeight = (overweightMans / 100) * overweightPeople;
  if(tableTests){
    System.out.println("Percentage of overweight mans = " +percentMansOverWeight +"%");
  }

  //Percentage of womans who are overweight.
  percentWomansOverWeight = (overweightWomans / 100) * totalWeight;
  if(tableTests){
    System.out.println("Percentage of overweight womans = " +percentWomansOverWeight +"%");
  }
}

}
