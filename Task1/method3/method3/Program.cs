using System;

namespace method3
{
    class Program
    {
        static void Main(string[] args)
        {
            //Rakamları bir diziye alıp dizi elemanlarını toplama

            int sum = 0;
            int[] rakamlar = new int[11];
            for (int i = 0; i < 11; i++)
            {
                Console.Write((i + 1) + " . rakamı gir : ");
                rakamlar[i] = Convert.ToInt32(Console.ReadLine());
                sum += rakamlar[i];
            }
            Console.WriteLine("Toplam= " + sum);
        }
    }
}
