Imports System.Data.SqlClient

Public Class Form1
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        ' Cadena de conexión a la base de datos
        Dim connectionString As String = "Data Source=localhost;Initial Catalog=nombre_base_de_datos;User ID=usuario;Password=contraseña"

        ' Consulta SQL
        Dim query As String = "SELECT * FROM nombre_tabla"

        ' Crear una conexión a la base de datos
        Using connection As New SqlConnection(connectionString)
            ' Abrir la conexión
            connection.Open()

            ' Crear un comando SQL
            Using command As New SqlCommand(query, connection)
                ' Ejecutar la consulta y obtener un lector de datos
                Using reader As SqlDataReader = command.ExecuteReader()
                    ' Recorrer los resultados y mostrarlos en un cuadro de texto
                    While reader.Read()
                        TextBox1.AppendText(reader("columna1").ToString() & vbTab & reader("columna2").ToString() & vbCrLf)
                    End While
                End Using
            End Using

            ' Cerrar la conexión
            connection.Close()
        End Using
    End Sub
End Class
