using GestionCompetidores.Entidades.EF;

namespace GestionCompetidores.Logica.Servicios;

public interface IDeporteService
{
    List<Deporte> Listar();
    
}

public class DeporteService : IDeporteService
{
    private readonly Practica3Context _ctx;
    
    public DeporteService(Practica3Context context)
    {
        _ctx = context;
    }
    
    public List<Deporte> Listar()
    {
        return _ctx.Deportes.ToList();
    }
}