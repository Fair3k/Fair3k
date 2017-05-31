/*
    Aditional Informations
    Name: Rafael Reis
    Date: 31/05/2017
    Work: IMC
**/

//Imports
  import java.awt.Toolkit;
  import java.awt.GridLayout;
  import java.util.Vector;
  import java.awt.Font;
  import java.awt.Color;
  import javax.swing.*;
  import java.io.File;
//End Imports

    public class imc extends Variables{

        public static void Initial(){
          for(; i < 1000; i++){

            name[cont] = JOptionPane.showInputDialog(null, "Informe o seu nome: ");
            Object select = JOptionPane.showInputDialog(null, name[cont]+"\nEscolha seu sexo: ", "Sexo", JOptionPane.INFORMATION_MESSAGE, icon, sexselect, sexselect[0]);
            age[cont] = Integer.parseInt(JOptionPane.showInputDialog(null, name[cont]+"\nInforme sua idade(Anos): "));
            weight[cont] = Double.parseDouble(JOptionPane.showInputDialog(null, name[cont]+"\nInforme seu peso(Kg): "));
            height[cont] = Double.parseDouble(JOptionPane.showInputDialog(null, name[cont]+"\nEscolha sua altura(Metro): "));

            if(select == "Masculino"){
              sex[cont] = "Masculino";
              masc++;

              //mediaM = mediaM + weight[i];
              //alturaM = alturaM + height[i];
            }
            else{
              sex[cont] = "Feminino";
              fem++;

            //  mediaF = mediaF + weight[i];
              //alturaF = alturaF + height[i];
            }

            Object exit[] = {"Sim", "Nao"};
            Object select1 = JOptionPane.showInputDialog(null, "Deseja adicionar mais alguma informação?", "Saida", JOptionPane.INFORMATION_MESSAGE, icon, exit, exit[0]);

            if(select1 == "Sim"){
              System.out.println(">>");
            }
            if(select1 == "Nao"){
              cont1 = i;
              i = 1000;
            }


          }

        }
        public static void Table(){
          Object tableselect = JOptionPane.showInputDialog(null, "Escolha: ", "IMC", JOptionPane.INFORMATION_MESSAGE, icon, table, table[0]);

          if(tableselect == table[0]){
            for(int j = 0; j < cont1; j++){
              JOptionPane.showMessageDialog(null, "Nome: " + name[j]
                                              + "\nIdade: " + age[j]
                                              + "\nSexo: " + sex[j]
                                              + "\nPeso: " + weight[j]
                                              + "\nAltura: " + height[j]
                                              + "\nStatus: " + status[j]);
            }
          }

          if(tableselect == table[1]){
            JOptionPane.showMessageDialog(null, "Total de Homens: " + masc
                                            + "\nMedia de Peso: " + pesoM
                                            + "\nMedia de IMC: " + imcM
                                            + "\nPercentual de Obesidade: " + poM);
          }

          if(tableselect == table[2]){
            JOptionPane.showMessageDialog(null, "Total de Mulheres: " + fem + "\nMedia de Peso: " + pesoF + "\nMedia de IMC: " + imcF + "\nPercentual de Obesidade: " + poF);
          }

          if(tableselect == table[3]){
            for(int j = 0; j < cont1; j++){
            JOptionPane.showMessageDialog(null, "Nome: " + name[j]
                                            + "\nIdade: " + age[j]
                                            + "\nSexo: " + sex[j]
                                            + "\nPeso: " + weight[j]
                                            + "\nAltura: " + height[j]
                                            + "\nStatus: " + status[j]);
            }
          }

          if(tableselect == table[4]){
            for(int j = 0; j < cont1; j++){
            JOptionPane.showMessageDialog(null, "Nome: " + name[j]
                                            + "\nStatus: " + status[j]
                                            + "\n\n");
            }
          }

        }
        public static void Operation(){
          //mediaP = mediaF + mediaM;
          //alturaP = alturaF + alturaM;
          //people = fem + masc;

        }

        public static void main(String args []){
          Initial();



      }
    }
