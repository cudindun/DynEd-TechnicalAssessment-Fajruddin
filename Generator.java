import java.io.*;
import java.util.*;


public class Generator{
    public static void main(String[] args) throws Exception{
        Random rand = new Random();
		int i;
		FileWriter generate = new FileWriter("usia.txt");
		for(i=1;i<=10000000;i++){
			int random = rand.nextInt(100) + 1;
			String sr = Integer.toString(random);
			generate.write(sr);
			generate.write(System.lineSeparator());
			//System.out.println(random);
		}
		generate.close();
    }

}