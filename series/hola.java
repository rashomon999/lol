import java.util.Scanner;

public class Main {
    public static void main(String args[]) {
		/* Main loop for user interaction. call method selectIterations (menu) for the begining (iterations) or end of program and
		finalCost for the final cost in case of run program */
		int[] tripCosts = new int[5]; // Arreglo para almacenar los costos de los viajes
        int[] lastTenCosts = new int[10]; // Arreglo para almacenar los últimos diez costos
        int lastTenIndex = 0; // Índice para rastrear la posición en el arreglo de los últimos diez costos
  
		boolean mainLoop = false;
        while (!mainLoop) {
            Scanner scanner = new Scanner(System.in);

            int iterations = selectIterations(scanner);

            if (iterations == 5) {
				showLastTenCosts(lastTenCosts, lastTenIndex);
                System.out.println("Saliendo del programa...");
                return;
            }

            if (iterations == -1) {
                System.out.println("Opción inválida. Por favor, elija 1, 2 o 3.");
            }

            int finalCost = executeTrip(scanner, iterations);
			if(iterations==3){
				System.out.println("El precio total del viaje con tu combo de amigos será de: " + finalCost);
			}
			
			tripCosts[lastTenIndex % 10] = finalCost; // Almacena el costo en el arreglo de costos de viajes
            lastTenCosts[lastTenIndex % 10] = finalCost; // Almacena el costo en el arreglo de los últimos diez costos
            lastTenIndex++; // Incrementa el índice para el siguiente costo
         
        }
    }
	
	
	
	public static void showLastTenCosts(int[] lastTenCosts, int lastTenIndex) {
	/* This method, showLastTenCosts, prints the last ten costs stored in an array. It starts by printing
	a header and then iterates over the last ten costs, printing each one along with its index in the array.prints the available costs. 
	*/
        System.out.println("Últimos diez vuelos:");
        int startIndex = lastTenIndex >= 10 ? lastTenIndex % 10 : 0;
        for (int i = startIndex; i < startIndex + 10; i++) {
            int index = i % 10;
            System.out.println("Costo " + (i + 1) + ": " + lastTenCosts[index]);
        }
    }
	
	
    public static int selectIterations(Scanner scanner) {
		///Select travel options: alone or accompanied and establish iterations based on the response
        int iterations = 0;
        boolean validOption = false;

        while (!validOption) {
            System.out.println("¿Viajas solo o acompañado?");
            System.out.println("1. Solo");
            System.out.println("2. Acompañado");
            System.out.println("3. Para salir del programa");
            System.out.print("Digite una opción (1/2/3): ");
            String travelDecision = scanner.nextLine();

            if (travelDecision.equals("1")) {
                iterations = 1;
                validOption = true; 
            } else if (travelDecision.equals("2")) {
                iterations = 3;
                validOption = true; 
            } else if (travelDecision.equals("3")) {
                iterations = 5;
                validOption = true; 
            } else {
                System.out.println("Opción inválida. Por favor, elija entre 1, 2 o 3.\n");
            }
        }
        return iterations;
    }
	
	
    public static int executeTrip(Scanner scanner, int iterations) {
	///Calculates total trip cost for each passenger, aks for a fare and a benefic for certain fares.
    int totalCost = 0;
    for (int i = 0; i < iterations; i++) {
        int cost = 0;
        System.out.println("Continuemos con el pasajero número " + (i + 1) + ", " + (i == 0 ? "Miguel" : "acompañante de Miguel") + ". Aproximadamente, ¿cuánto peso en kg llevarás en equipaje?");
        iterate(scanner); 
        scanner.nextLine(); 
        
        String fare = ""; 
        
        boolean validFare = false;
        while (!validFare) {
            System.out.println("Estas tarifas bastarán para el equipaje que llevas. ¿Qué tarifa elegirás? (XS/S/M)");
            fare = scanner.nextLine();
            if (fare.equals("XS") || fare.equals("S") || fare.equals("M")) {
                validFare = true;
                cost = fareSelection(fare, scanner, cost); 
            } else {
                System.out.println("Tarifa inválida. Por favor, elija entre: XS, S o M.");
            }
        }
        
        if (!fare.equals("M")) {
            System.out.println("¿Tomarás la opción de elegir asiento? (SI/NO)");
            System.out.println("El costo de este servicio adicional es: 50000");
            String seatDecision = getResponse(scanner); 
            if (seatDecision.equals("SI")) {
                cost += 50000;
                cost = seatSelection(seatDecision, scanner, fare, cost);
            }
        }
        cost = additionalPackages(scanner, cost);
        System.out.println("Cuenta = " + cost);
        totalCost += cost;
    }
    return totalCost;
	}
	
	public static String getResponse(Scanner scanner) {
	///This method prompts the user to respond with 'YES' or 'NO' and validates the input. If the input is invalid, it prompts again.
    String response = "";
    boolean validResponse = false;

    while (!validResponse) {
        System.out.println("Por favor, responda con 'SI' o 'NO': ");
        response = scanner.nextLine().toUpperCase(); 

        if (response.equals("SI") || response.equals("NO")) {
            validResponse = true; 
        } else {
            System.out.println("Respuesta inválida. Por favor, responda con 'SI' o 'NO'.");
        }
    }

    return response;
	}
	
	
    public static void iterate(Scanner scanner) {
		///shows fare options based on entered weight 
        System.out.println("Introduce el peso que llevarás en tu equipaje: ");
        double weight = scanner.nextDouble();
        if (weight <= 3) {
            System.out.println("Tarifa XS, con un costo de 175000 donde tendrás artículo personal");
        } 
        if (weight < 10) {
            System.out.println("Tarifa S, con un costo de $218.750 donde tendrás artículo personal y maleta en cabina de 10 kg.");
        } 
        if (weight < 33) {
            System.out.println("Tarifa M, con un costo de $284.375 donde tendrás artículo personal, maleta en cabina de 10 kg, maleta documentada en bodega de 23 kg y elección de asiento.");
        }
        if (weight > 33 && weight <= 112) {
            System.out.println("Tarifa M  con un costo de 284375 donde tendrás artículo personal, \n maleta en cabina de 10 kg, maleta documentada en bodega de 23 kg \n y elección de asiento. \n \n ");
            System.out.println("Pero dado que sobrepasas el peso de la tarifa M, que es la que \n mayor peso disponible algerba, tendrás que solicitar un beneficio de maletas");
        } 
        if (weight > 112) {
            System.out.println("Su equipaje supera los 112kg o ha cometido un error");
        }
    }
    
    public static int fareSelection(String fare, Scanner scanner, int cost) {
	///calculate a cost based on fare and decision of choose seart for fare M
    int farePrice = 0;
    if (fare.equals("XS")) {
        farePrice = 175000;
        cost += farePrice;
        System.out.println("cuenta= " + farePrice);
        System.out.println("¡Excelente elección! Al ser tarifa XS, tienes la posibilidad de elegir asiento con un coste adicional si lo deseas. ¿Tomarás esta opción?");
    } else if (fare.equals("S")) {
        int farePriceXS = 175000; 
        double comfortPercentage = 0.25; 
        farePrice = (int) (farePriceXS + (comfortPercentage * farePriceXS));
        cost += farePrice;
        System.out.println("cuenta= " + farePrice);
        System.out.println("¡Excelente elección! Al ser tarifa S, tienes la posibilidad de elegir asiento con un coste adicional si lo deseas. ¿Tomarás esta opción?");
    } else if (fare.equals("M")) {
        int farePriceS = 218750; 
        double comfortPercentage = 0.30; 
        farePrice = (int) (farePriceS + (comfortPercentage * farePriceS));
        cost += farePrice;
        System.out.println("cuenta= " + farePrice);
        String seatDecision = "SI";
        cost = seatSelection(seatDecision, scanner, fare, cost);
    }
    return cost; 
	}
    
    public static int seatSelection(String seatDecision, Scanner scanner, String fare, int cost) {
		///choosing seat, hallway, window or none (middle seat) and call calculateSeatCost method to add aditional cost and show to the user the actualice cost 
        if (seatDecision.equals("SI")) {
            int seatPrice = 0;
            if(fare.equals("M")){
                System.out.println("¡Excelente elección! Al ser tarifa M, tendrás elección de asiento antes del check-in incluida en tu precio. ¿Optarás por tener asiento en pasillo, ventana o ninguno (asiento en medio)?");
                String seat = scanner.nextLine();
                seatPrice = calculateSeatCost(seat);
                cost += seatPrice;
                System.out.println("El precio total es: " + cost);
            } else if (fare.equals("S")) {
                System.out.println("¿Optarás por tener asiento en pasillo, ventana o ninguno (asiento en medio)?");
                String seat = scanner.nextLine();
                seatPrice = calculateSeatCost(seat);
                cost += seatPrice;
                System.out.println("El precio total es: " + cost);
            } else {
                System.out.println("¿Optarás por tener asiento en pasillo, ventana o ninguno (asiento en medio)?");
                String seat = scanner.nextLine();
                seatPrice = calculateSeatCost(seat);
                cost += seatPrice;
                System.out.println("El precio total es: " + cost);
            }
        }
        return cost; 
    }
    
    public static int calculateSeatCost(String seat) {
		///add 15000 for hallway or window seat
        if (seat.equalsIgnoreCase("pasillo") || seat.equalsIgnoreCase("ventana")) {
            System.out.println("El asiento seleccionado tiene un costo adicional de $15.000 COP.");
            return 15000;
        } else {
            System.out.println("El asiento seleccionado no tiene costo adicional.");
            return 0;
        }
    }
    
    public static int additionalPackages(Scanner scanner, int cost){
        ///This method handles additional benefic selection and calculates their cost based on user input.

        System.out.println("¡Para apreciar las vistas! Súper, ya casi estamos listos para verte a bordo. Finalmente, ¿desearás algún servicio adicional de los siguientes? \n (SI/NO):");
		System.out.println("# Maleta adicional de 10 kg (máximo 3) \n# Maleta documentada adicional de 23 kg (máximo 2)");
        String additional = getResponse(scanner);
        if(additional.equals("SI")){
            System.out.println("¿Desearás maleta adicional de 10 kg? (SI/NO)");
            String additionalTen = getResponse(scanner);
            if(additionalTen.equals("SI")){
                System.out.println("¿Cuántas maletas adicionales de 10 kg (máximo 3)?");
                int howManyAdditionalTen = scanner.nextInt();
                cost += 50000 * howManyAdditionalTen;
            }if(additionalTen.equals("NO") || additionalTen.equals("SI")){
                scanner.nextLine();
                System.out.println("¿Desearás maleta adicional de 23 kg? (SI/NO)");
                String additionalTwenty = getResponse(scanner);
                if(additionalTwenty.equals("SI")){
                    System.out.println("¿Cuántas maletas adicionales de 23 kg (máximo 2)?");
                    int howManyAdditionalTwenty = scanner.nextInt();
                    cost += 50000 * howManyAdditionalTwenty;
            }}
        } 
        return cost;
    }
}