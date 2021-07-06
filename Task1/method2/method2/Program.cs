using System;

namespace method2
{
    class Program
    {
        static void Main(string[] args)
        {
            //Rakamları ayrı değişkenlere atayıp toplama işlemi yapma

            int sum = 0;
            int rakam;
            string variableName;
            for (int i = 1; i <= 11; i++)
            {
                Console.WriteLine("{0}. Rakamı giriniz:", i);
                rakam = Convert.ToInt32(Console.ReadLine());
                variableName = "rakam" + i;
                Console.WriteLine(variableName + "=" + rakam);
                sum += rakam;
            }
            Console.WriteLine("Toplam=" + sum);
        }
    }
}
