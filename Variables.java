import java.awt.Toolkit;
import java.awt.GridLayout;
import java.util.Vector;
import java.awt.Font;
import java.awt.Color;
import javax.swing.*;
import java.io.File;

public class Variables{

  //Global Variables
  public static ImageIcon icon = new ImageIcon("../Imagens/Icon1.png");

  public static int age[] = new int[1000];
  public static double weight[] = new double[1000];
  public static double height[] = new double[1000];
  public static double imcGeral[] = new double[1000];
  public static String sex[] = new String[1000];
  public static String name[] = new String[1000];
  public static String status[] = new String[1000];
  //public static String statusinfo[5] = {"Abaixo do Normal", "Normal", "Obesidade Leve", "Obesidade Moderada", "Obesidade Morbida"};
  public static Object sexselect[] = {"Masculino", "Feminino"};

  public static Object table[] = {"Exibir Lista de Entrevistados",
                                  "Exibir Calculos dos Homens Adultos",
                                  "Exibir Calculos das Mulheres Adultas",
                                  "Exibir Todos que estao Obesos",
                                  "Exibir Lista por Ordem de Situacao"};


  public static int masc;
  public static int mediaM;
  public static int imcM;
  public static int alturaM;
  public static int poM;
  public static int pesoM;

  public static int fem;
  public static int mediaF;
  public static int imcF;
  public static int alturaF;
  public static int poF;
  public static int pesoF;

  public static int people;
  public static int mediaP;
  public static int imcP;
  public static int alturaP;
  public static int poP;
  public static int pesoP;

  public static int i = 0;
  public static int cont1;
  public static int cont;


//End Variables

}
